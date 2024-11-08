<?php
$mysqli =new mysqli("localhost","root","kimhien123");

//
if($mysqli===false){
    die("ERRO; Could not connect." .$mysqli->connect_error);

}
$sql="CREATE DATABASE THOITRANG";
if($mysqli->query($sql)===true){
    echo "Database creates successfully";

}
else{
    echo "ERRO; Could not able to execute $sql. " .$mysqli->error;
}
?>