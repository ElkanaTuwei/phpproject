<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 11/21/2016
 * Time: 7:18 PM
 */
session_start();
unset($_SESSION);
session_destroy();
header('Location:login.php');
?>

