<?php
/**
 * Created by PhpStorm.
 * User: elkana
 * Date: 9/27/2016
 * Time: 2:26 AM
 */
$title="Gallery";
session_start();
?>
<html>
<head>
    <?php
    include_once ("headfiles.php");
    ?>
</head>
<body>
<?php
include_once ("menubar.php");
?>
<img class="img-responsive" src="images/57.jpg" alt="image.jpg" class="image-responsive"/>
<img class="img-circle" src="images/55.jpg">
<script>
    $(document).ready(function () {
        $('.gallery').addclass("active");
    });
</script>
</body>
</html>
