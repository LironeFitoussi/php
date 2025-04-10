<?php
require __DIR__ . '/inc/functions.inc.php';
$city = null;
if (!empty($_GET['city'])) $city = $_GET['city'];

$filename = null;
$cityInformation = [];
if (!empty($city)) {
    $cities = json_decode(file_get_contents(__DIR__ . '/../data/index.json'), true);
    foreach ($cities as $cityData) {
        if (in_array($city, $cityData)) {
            $filename = $cityData['filename'];
            $cityInformation = $cityData;
            break;
        }
    };
};

if ($filename) {
    $results = json_decode(file_get_contents('compress.bzip2://' . __DIR__ . "/../data/{$filename}"), true)["results"];

    $stats = [];
    foreach ($results as $result) {
        // if ($result['parameter'] !== 'pm25' || $result['value'] <= 0) continue;

        $month = substr($result['date']['local'], 0, 7);
        $type = $result['parameter'];

        if (!isset($stats[$month])) {
            $stats[$month] = [];
        };

        if (!isset($stats[$month][$type])) {
            $stats[$month][$type] = [];
        };


        $stats[$month][$type][] = $result['value'];
    };

    // Get total types:
    $units = [];

    $types = (array_keys(reset($stats)));
    foreach ($types as $type) {
        foreach ($results as $result) {
            if (!isset($units[$type])) {
                foreach ($results as $result) {
                    if ($result['parameter'] === $type) {
                        $units[$type] = $result['unit'];
                        break;
                    }
                }
            };
        };
    };

    var_dump($units);
};


?>

<?php
require __DIR__ . '/views/header.inc.php';
?>

<?php if (empty($city)): ?>
    <p>The city you are looking for does not exist.</p>
<?php else: ?>
    <?php if (!empty($stats)): ?>
        <h2>City Information</h2>
        <ul>
            <h3><?= e($cityInformation['city']) ?>, <?= e($cityInformation['country']) ?> <small><?= e($cityInformation['flag']) ?></small></h3>
        </ul>
        <table>
            <tr>
                <th>Month</th>
                <?php foreach ($types as $type): ?>
                    <th><?= e($type) ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($stats as $month => $mes): ?>
                <tr>
                    <th><?= e($month) ?></th>
                    <?php foreach ($mes as $typeKey => $typeValues): ?>
                        <td><?= e(round(array_sum($typeValues) / count($typeValues), 2)) ?> <?= e($units[$typeKey]) ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
<?php endif; ?>
<?php
require __DIR__ . '/views/footer.inc.php';
?>