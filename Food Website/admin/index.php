
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
    exit();
 } 
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>

<body>
    <h3 class="title_admin">Welcome to Admin</h3>
    <div class="wrapper">
        <?php
        include("config/config.php");
        include("modules/menu.php");
        include("modules/main.php");
        ?>
    </div>
</body>

</html>