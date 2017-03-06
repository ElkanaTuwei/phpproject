<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 11/21/2016
 * Time: 5:20 PM
 */
$title = 'LogIn';
?>
<html>
<head>
    <?php
    include_once 'headfiles.php';
    include_once 'menubar.php';
    include_once 'connect.php';
    $message ='';
    if ($_POST){

        $username= $_POST['username'];
        $password=$_POST['password'];
        $select="SELECT * FROM `sample`.`member` WHERE `username`='$username' AND `password`='$password'";
        $validate=mysqli_query($db,$select);

        if(mysqli_num_rows($validate)==1){
            $users=mysqli_fetch_assoc($validate);
            $user=$users;

            session_start();
            $_SESSION['id']=$user['id'];
            $_SESSION['fullnames']=$user['fullnames'];
            $_SESSION['username']=$username;

            header('Location:index.php');
        } else{
            $message ="user does not exist \n wrong username or password";
        }
    }else{

    }

    ?>

</head>
<body>

<h1>WELCOME!</h1>
<h2>logIn to continue</h2>
<p class="text-danger">
    <?php
    echo $message;
    ?>
</p>

<form class="form-group" method="post" action="login.php">
    Username:<input type="text" class="form-control" name="username" placeholder=" Enter username"><br>
    Password:<input type="password" class="form-control" name="password" placeholder="Password" ><br>
    <input type="submit" class="btn-lg btn-light-green" value="LOGIN">
</form><br>
 <a href="signup.php">or SignUp</a>
</body>
</html>
