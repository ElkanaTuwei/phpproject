<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 11/21/2016
 * Time: 5:28 PM
 */
$title = 'SignUp';
$message="message";
?>
<html>
<head>
    <?php
    include_once 'headfiles.php';
    include_once 'menubar.php';
    include_once 'connect.php';
    if ($_POST){
        $fullnames = $_POST['fullnames'];
        $username= $_POST['username'];
        $password=$_POST['password'];
            $select="SELECT * FROM `sample`.`member` WHERE `username`='$username'";
            $validate=mysqli_query($db,$select);
        if(mysqli_num_rows($validate)==0){
           $insert="INSERT INTO `sample`.`member` (`fullnames`,`username`, `password`) VALUES ('$fullnames','$username','$password')";
            mysqli_query($db, $insert);
            $user_id=mysqli_insert_id($db);
            session_start();
            $_SESSION['id']=$user_id;
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['fullnames']=$fullnames;


            header('Location:index.php');


        }else{
            $message="could not create account.
            \n username already exists";
        }
    }
    ?>

</head>
<body>
<h2>SignUp/Create account </h2>
<p>
    <?php
    echo $message
    ?>
</p>
 <form class="form-group" action="signup.php" method="post">
     Full Names:<input name="fullnames" type="text" placeholder="Full Names" class="form-control"><br>
     Username<input name="username" type="text" placeholder="Username" class="form-control"><br>
     Password<input name="password" type="password" placeholder="password" class="form-control"><br>
     <input type="submit" class="btn btn-primary" value="SignUp">
 </form>
<a href="login.php">back to login</a>
</body>
</html>
