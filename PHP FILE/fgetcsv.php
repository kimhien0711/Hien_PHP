<?php
    if (($open = fopen("North.csv","r")) !== FALSE){
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
            $array = $data;
        }
        fclose($open);
    }
?>

scrapy
beatifulSoup