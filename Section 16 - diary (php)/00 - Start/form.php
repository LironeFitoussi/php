<?php
require __DIR__ . '/inc/db-connect.inc.php';
require __DIR__ . '/inc/functions.inc.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    $p = $_POST;
    if (!empty($p['title']) && !empty($p['date']) && !empty($p['message'])) {
        $p['image'] = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/uploads/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = uniqid('img_', true) . '.' . $fileExtension;
            $destPath = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                [$width, $height] = getimagesize($destPath);
                $scale = min(800 / $width, 800 / $height, 1);
                $newWidth = (int)($width * $scale);
                $newHeight = (int)($height * $scale);

                $imageResource = match ($fileExtension) {
                'jpg', 'jpeg' => imagecreatefromjpeg($destPath),
                'png' => imagecreatefrompng($destPath),
                'gif' => imagecreatefromgif($destPath),
                default => null
                };

                if ($imageResource) {
                $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
                imagecopyresampled($resizedImage, $imageResource, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
                match ($fileExtension) {
                    'jpg', 'jpeg' => imagejpeg($resizedImage, $destPath, 90),
                    'png' => imagepng($resizedImage, $destPath),
                    'gif' => imagegif($resizedImage, $destPath),
                };
                imagedestroy($resizedImage);
                imagedestroy($imageResource);
                }
                $p['image'] = $newFileName;
            }
            }
        }

        $res = query(
            'INSERT INTO entries(`title`, `date`, `message`, `image`) VALUES (:title, :date, :message, :image)',
            ['title' => $p['title'], 'date' => $p['date'], 'message' => $p['message'], 'image' => $p['image']]
        );
        if (empty($res)) {
            echo '<script type="text/javascript">
            alert("Entry successfully saved!");
            window.location.href = "index.php";
            </script>';
        } else {
            // var_dump($res);
            echo '<script type="text/javascript">
            alert("Failed to save the entry. Please try again.");
            </script>';
        }
    } else {
        echo '<script type="text/javascript">
                alert("Some fields are missing")
            </script>';
    }
}
?>

<?php require __DIR__ . '/views/header.inc.php'; ?>

<h1 class="main-heading">New Entry</h1>

<form method="POST" action="form.php" enctype="multipart/form-data">
    <div class="form-group">
        <label class="from-group__label" for="title">Title:</label>
        <input class="from-group__input" type="text" id="title" name="title" required />
    </div>
    <div class="form-group">
        <label class="from-group__label" for="date">Date:</label>
        <input class="from-group__input" type="date" id="date" name="date" required />
    </div>
    <div class="form-group">
        <label class="from-group__label" for="date">Image:</label>
        <input class="from-group__input" type="file" id="image" name="image" />
    </div>
    <div class="form-group">
        <label class="from-group__label" for="message">Message:</label>
        <textarea class="from-group__input" id="message" name="message" rows="6" required></textarea>
    </div>

    <div class="form-submit">
        <button class="button">
            <svg class="button__icon" viewBox="0 0 34.7163912799 33.4350009649">
                <g style="fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;">
                    <polygon points="20.6844359446 32.4350009649 33.7163912799 1 1 10.3610302393 15.1899978903 17.5208901631 20.6844359446 32.4350009649" />
                    <line x1="33.7163912799" y1="1" x2="15.1899978903" y2="17.5208901631" />
                </g>
            </svg>
            Save!
        </button>
    </div>
</form>
<?php require __DIR__ . '/views/footer.inc.php'; ?>