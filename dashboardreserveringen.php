<?php
session_start();
?>


<?php
if(!isset($_SESSION['user'])){
    header("location: admin.php");
} else {
    if (isset($_POST['loguit'])) { 
        unset($_SESSION["user"]);
        session_destroy($_SESSION["user"]); 
        header("location: admin.php");
        session_destroy($_SESSION['time_start_login']);
    }
?>

<section class="admin-menu">
    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
    <input class="main-button" type="submit" name="loguit" value="uitloggen"/>
    <a href="dashboard.php" class="main-button"> dashboard </a>
    </form>
</section>

<section class="dashboard-container">
    <section class="laaste-reservering">
        <?php include_once('./attributes/templates/adminophalenall.php'); ?>
    </section>
<section>


<?php } ?>

