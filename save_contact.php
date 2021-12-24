<?php
session_start();
include 'db_connect.php';
extract($_POST);
if (!empty($_POST)) {
    // Store data in db
    $q = "INSERT INTO contact(name, email, message)
            VALUES ('{$name}', '{$email}', '{$message}')";

    $sql = mysqli_query($conn, $q);

    if (!$sql) {
        die("MySQL query failed.");
    } else {
        $_SESSION['message'] = "Message Sent Successfully";
    }
} else {
    $_SESSION['message'] = "Message couldn't be sent, try again";
}

// header("Location:contact.php");