<?php
    $fh = fopen("my_settings.txt","r") or die ("File permission to open it");
    $line = fgets($fh);
    echo $line;
    fclose($fh);
?>