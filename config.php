<?php
$local="localhost";
$root= "root";
$pass="";
$databaseName="re3aya";
$conn= new mysqli($local,$root, $pass,$databaseName);
if($conn){
$error=array();
session_start();
}
else{
    die("unable to connect to database");
}
?>