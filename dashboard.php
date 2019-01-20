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
    <button class="main-button"> allen reserveringen</button>
    </form>
</section>

<section class="dashboard-container">
    <section class="laaste-reservering">
        <?php include_once('./attributes/templates/adminophalen.php'); ?>
    </section>
    <section class="agenda">
        <?php include_once('./attributes/templates/maand.php'); ?>
    </section>
<section> 

<?php } ?>

<?php include_once('./attributes/templates/footer.php'); ?>

