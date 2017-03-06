<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 9/27/2016
 * Time: 2:25 AM
 */
$title="help";
session_start();
?>
<html>
<head>
    <?php
    include_once ('headfiles.php');
    include_once ('menubar.php');
    ?>
</head>
<body>
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header purple darken-4">
            <h3><i class="fa fa-lock"></i> Login:</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-xs-center">
            <button class="btn btn-deep-purple">Login</button>
        </div>

</body>
</html>
