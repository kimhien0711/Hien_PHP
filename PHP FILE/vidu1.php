<?php
    $line = fopen("vidu.txt","r"); // chỉ đọc
    if ($line) {
        echo"Không thể sử dụng file này";
        exit;

    }else{
        while(!feof($fh) ) {    // cho vòng lặp để lặp lại cho đến cuối file
            $line = fgets( $fh );
            echo nl2br( $line );
        }
    }
    file_exists("vidu.txt");
    $fh = fopen("vidu.txt","r");
    $line = fgets( $fh );
    echo $line;
    fclose( $fh );

    
?>