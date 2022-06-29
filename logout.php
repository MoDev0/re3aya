<?php
include('config.php');
session_destroy();
session_unset();
echo"See You Soon!";
header("refresh:3,url=login.php");
?>