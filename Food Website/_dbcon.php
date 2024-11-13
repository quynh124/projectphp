<?php
$mysqli = new mysqli("localhost","root","","foodorder","3306");
if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
    exit();
  }
$connect=mysqli_connect("localhost","root","","foodorder") or die(mysqli_error($connection))
?>