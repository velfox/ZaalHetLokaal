<?php
session_start();
?>


<?php
print_r($_SESSION);
if(!isset($_SESSION['user'])){
    header("location: admin.php");
    echo 'doei';
} else {
    echo 'hoi';
    if (isset($_POST['loguit'])) { 
        unset($_SESSION["user"]);
        session_destroy($_SESSION["user"]); 
        header("location: admin.php");
        session_destroy($_SESSION['time_start_login']);
    }
?>
    <section class=reservering>
        <section class="reservering-title">
            <p class="datum">  </p>
            <p class="title"> </p>
            <p class="status"> </p>
        </section>
        <section class="gegevens">    
            <section class="persoon">
                <p class="naam"> </p>
                <p class="achternaam"> </p>
                <p class="email"> </p>
                <p class="tel"> </p>
                <section class="actions">
                    <p class="datum"> </p>
                    <p class="title"> </p>
                    <p class="status"> </p>
                </section>
            </section class="arragement">
                <p class="arragement"> </p>
                <p class="pakket"> </p>
                <p class="aanvulling"> </p>
            </section> 
        </section>
    </section>
<?php } ?>


<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
<input type="submit" name="loguit" value="loguitdf"/>
</form>
