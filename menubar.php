<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 9/27/2016
 * Time: 3:23 AM
 */

?>

<nav class="navbar navbar-inverse bg-primary ">
    <a class="navbar-brand active" href="index.php">MENUBAR</a>
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <?php
            if(isset($_SESSION)){
                ?>
                <li class="nav-item "><a class="nav-link" href="index.php">HOMEPAGE</a></li>
                <li class="nav-item"><a class="nav-link" href="pics.php">PICS</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">GALLERY</a></li>
                <li class="nav-item"><a class="nav-link" href="notices.php">NOTICEBOARD</a></li>
                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="timetable.php" role="button"
                                                            aria-haspopup="true" aria-expanded="false">dropdown<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">HOMEPAGE</a></li>
                        <li><a href="gallery.php">GALLERY</a> </li>
                        <li><a href="notices.php">NOTICESECTION</a> </li>
                        <li><a href="help.php">HELP</a></li>
                    </ul>
                </li>

                <li class="btn-mdb"><a href="help.php">     <?php
                        echo $_SESSION['username'];
                        ?></a></li>
                <li class="btn"><a href="help.php">     <?php
                        echo $_SESSION['fullnames'];
                        ?></a></li>
                <li class="btn"><a href="logout.php">LogOut</a></li>
            <?php
            }else{
                ?>
               <li ><a href="login.php">Login</a></li>
               <li><a href="signup.php">SignUp</a></li>
            <?php
            }

            ?>


        </ul>
     </div>

</nav>
