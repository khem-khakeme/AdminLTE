<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "supisara";

$con = mysqli_connect($host, $user, $pass, $dbname);
if (mysqli_connect_errno()) {
    echo "การเชื่อมต่อผิดพลาด", mysqli_connect();
    exit();
}
?>