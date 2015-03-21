<?php
session_start();
$_SESSION['checkout'] = 'checkout';
header('location:cart.php');
?>