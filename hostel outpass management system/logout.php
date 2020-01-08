<?php
unset($_COOKIE['user']);
unset($_COOKIE['retname']);
unset($_COOKIE['apdate']);
session_start();
session_destroy();
header('location:index1.php');
?>