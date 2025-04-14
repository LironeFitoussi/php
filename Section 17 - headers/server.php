<?php

    echo '<pre>';
    $ip = $_SERVER["REMOTE_ADDR"];
    var_dump($ip);
    var_dump($_SERVER);
    echo '</pre>';
?>

<form method="POST" action="<?= $_SERVER['PHP_SELF']?>">
    <input type="text" name="username"/>
    <input type="submit" value="Submit!">
</form>