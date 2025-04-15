<?php 
    function sizeFormatter($size, $format) {
        switch ($format) {
            case "mb":
                return round($size / (1024 * 1024), 2) . " MB";
            case "kb":
                return round($size / 1024, 2) . " KB";
            case "gb":
                return round($size / (1024 * 1024 * 1024), 2) . " GB";
            default:
                return $size . " bytes";
        }
    }

    // Example usage
    $fileSize = 1048576; // 1 MB in bytes
    echo sizeFormatter($fileSize, "mb"); // Output: 1 MB
    echo sizeFormatter(rand(1, 9999999999), "gb"); // Output: 1 MB

?>