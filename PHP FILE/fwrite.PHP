<?php
    $fh = fopen("my_settings.txt","w") or die ("Failed to create file");
    $text = "my_database";
    fwrite($fh, $text) or die ("Could not write to file");
    fclose($fh);
    echo"File 'my_settings.txt' written successfully";
?>