<?php
unset($_COOKIE['adminuser']);
session_start();
session_destroy();
header('location:adminindex1.php');
?>