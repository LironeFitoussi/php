<?php
require __DIR__ . '/inc/functions.inc.php';
$city = null;
if (!empty($_GET['city'])) $city = $_GET['city'];

$filename = null;
if (!empty($city)) {
    $cities = json_decode(file_get_contents(__DIR__ . '/../data/index.json'), true);
    foreach ($cities as $cityData) {
        if (in_array($city, $cityData)) {
            $filename = $cityData['filename'];
            break;
        }
    };
};

if ($filename) {
    $results = json_decode(file_get_contents('compress.bzip2://' . __DIR__ . "/../data/{$filename}"), true)["results"];

    $stats = [];
    foreach ($results as $result) {
        if ($result['parameter'] !== 'pm25') continue;

        $month = substr($result['date']['local'], 0, 7);
        if (!isset($stats[$month])) {
            $stats[$month] = [];
        };
        $stats[$month][] = $result['value'];

    };
    // var_dump($stats);
};


?>

<?php
require __DIR__ . '/views/header.inc.php';
?>

<?php if (empty($city)): ?>
    <p>The city you are looking for does not exist.</p>
<?php else: ?>
    <?php if (!empty($stats)): ?>
        <table>
            <?php foreach ($stats as $month => $mes): ?>
                <tr>
                    <th><?= e($month) ?></th>
                    <td><?= e(array_sum($mes) / count($mes)) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
<?php endif; ?>
<?php
require __DIR__ . '/views/footer.inc.php';
?>