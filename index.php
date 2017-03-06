<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 9/27/2016
 * Time: 2:05 PM
 */
$title="Homepage";
session_start();
if (!$_SESSION){
    header('Location:login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include_once ("headfiles.php");
    ?>
</head>
<body>
<?php
include_once ("menubar.php");
?>
<h1>HOMEPAGE</h1>
<img src="images/homely.jpg" class="img-circle">
</body>
</html>
