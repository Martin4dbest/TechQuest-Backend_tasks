<?php
    session_start();
    include('connectdb.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php require('layout.php') ?>
</head>
<body>
    <?php require('include/navbar.php'); ?>
</body>
</html>