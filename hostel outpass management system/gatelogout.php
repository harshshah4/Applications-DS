<?php
unset($_COOKIE['gateuser']);
session_start();
session_destroy();
header('location:gateindex1.php');
?>