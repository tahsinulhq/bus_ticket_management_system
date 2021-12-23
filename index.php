<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS</title>



</head>

<body>
    <?php session_start() ?>
    <?php

    header('index.php?page=home');
    include 'header.php'; ?>
    <?php if (isset($_SESSION['login_id'])) include 'admin_navbar.php';
    else include 'navbar.php'; ?>

    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
    </div>

    <?php
    if (isset($_GET['page']) && !empty($_GET['page']))
        include($_GET['page'] . '.php');
    else
        include('home.php');

    ?>

    



</body>

</html>