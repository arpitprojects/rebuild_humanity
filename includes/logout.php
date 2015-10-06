<?php 
require 'core.php';//usinh http refere
session_destroy();
header('Location:../index.php');

unset($_SESSION['fb']);
?>


