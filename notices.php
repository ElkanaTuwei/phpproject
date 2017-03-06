<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 10/2/2016
 * Time: 1:16 AM
 */
session_start();
$title="noticesection";
?>
<html>
<script src="js/angular.min.js"></script>
<head>
    <?php
    include_once 'headfiles.php';
    include_once 'menubar.php';
    include_once 'connect.php';

    if ($_POST){
        $name=$_POST['name'];
        $registration_number=$_POST['registration_number'];
        $email=$_POST['email'];
        $sex=$_POST['sex'];

        $sqli="insert into `sample`.`record`(`name`,`registration_number`,`email`,`sex`) VALUES ('$name','$registration_number','$email','$sex')";
        mysqli_query($db,$sqli);
        header('Location:notices.php');

    }
    $fetch="select * from `sample`.`record` ORDER BY `id` DESC ";
    $fetched=mysqli_query($db, $fetch);
    ?>


</head>
<body>
<h1>sample and 2nd project</h1>
<form name="straps" class="form-group" method="post" action="notices.php">
    NAME:<input class="form-control" name="name" type="text" placeholder="Enter Name"><br>
    REG.:<input class="form-control" name="registration_number" type="text" placeholder="Registration Number"><br>
    eMail<input class="form-control" name="email" type="email" placeholder="email"><br>
    SEX:<select class="form-inline" name="sex">
        <option>Not Selected</option>
        <option> MALE</option>
        <option> FEMALE</option>
    </select><br>
    <input name="save" type="submit" value="SAVE">
</form>
<button class="btn-primary" onclick="location.href='gallery.php'">GALLERY</button>
<i><span  class="glyphicon glyphicon-star">icon</span></i>
<table class="table-bordered">
    <thead>
    <th class="tab-content">NAME</th><th>Registration Number</th><th>email</th><th>gender</th>
    </thead>

        <?php
        while ($received=mysqli_fetch_assoc($fetched)){ ?>
            <tr>
        <td><?php echo $received['name'] ?> </td>
        <td><?php echo $received['registration_number'] ?></td>
        <td><?php echo $received['email'] ?></td>
        <td><?php echo $received['sex'] ?></td>

    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
