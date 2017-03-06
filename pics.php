<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 11/16/2016
 * Time: 11:06 PM
 */
session_start();
?>
<?php
$db=mysqli_connect('127.0.0.1', 'root', 'Pythoncoded', 'sample');
if($_POST){
    $message='Your photo was uploaded successfully';
    $image=$_FILES['bucky'];
    $caption=$_POST['caption'];
    $target="images/";
    $filename=$image['name'];
    $size=$image['size'];
    $targetfile=$target.basename($filename);
    move_uploaded_file($image['tmp_name'],$targetfile);
    echo $filename.round($size/1024,2).'kb';
    $user_id=$_SESSION['id'];

    $sqli="INSERT INTO `sample`.`images`(`link`,`caption`,`size`,`user_id`) VALUES('$targetfile','$caption',$size,$user_id)";
    mysqli_query($db,$sqli);
    unset($_POST);
    header('Location:pics.php');
} else {
    $message='Please select a photo to upload ';
}

$collect="SELECT * FROM `sample`.`images` ORDER BY `id` DESC ";
$collected=mysqli_query($db,$collect);
?>

<html>
<?php
$title='connect';
include_once 'headfiles.php';
include_once 'menubar.php';
?>
<link rel="icon" href="images/55.jpg">
<form name="connect" class="form-group-lg" method="post" action="pics.php" enctype="multipart/form-data">
<div class="glyphicon glyphicon-envelope"></div>
    <?php
    echo $message
    ?>
    <input type="file" class="form-control-static" name="bucky"><br>
    caption<input type="text" placeholder="caption.." name="caption"><br>
    <input type="submit" value="submit" name="submission" class="btn btn-success">
</form>
<span>
    <?php
        while($posted=mysqli_fetch_assoc($collected)){
    ?>

    <span>
            <?php
            $selectuser="select * from `sample`.`member` WHERE `id`=".$posted['user_id'];
            $selecteduser=mysqli_query($db, $selectuser);
            $usersimage=mysqli_fetch_assoc($selecteduser);
            ?>
            <?php echo $usersimage['fullnames']."@(".$usersimage['username'].")"; ?>
        <img src="<?php echo $posted["link"] ?>" height="300" width="400" style="padding:2% ">
    <?php echo $posted['caption']."\n"?>
    <?php echo round($posted['size']/1024,2).'kb'?>
            <?php
            if($posted['user_id']==$_SESSION['id']) {

                ?>
                <a>edit  </a><a>delete</a>
                <?php
            }
        ?>
    </span><?php } ?>
</span>

</html>
