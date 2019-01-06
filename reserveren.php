
<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 

<?php if (empty($_GET["option"])) {
    header('Location: mogelijkheden.php');
    exit;
} else {
    $option = htmlspecialchars($_GET["option"]);
}
?>


<section class="information">
    <section class="information-conainer">

        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > Reserveren <?= $option; ?> </p>
                </section>
                <section class="information-box">
                    <p class="information-lead"> U kunt hieronder de gegevens invullen om te reserveren, Hierna wordt deze reservering verwerkt en binnen 2 werkdagen krijgt u van ons bericht </p>
                </section>
            <!-- end informatie container -->
        </section>
        <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > formulier   </p>
                </section>
                <section action="formchek.php" class="form-box">
                    <form action="formchek.php"  method="post">
                        <!-- part 1 -->
                        <section id="form-part-1">
                        <label> Datum </label><br>
                        <input type="date" name="datum">
                        <label> dagdelen</label>                        <br>
                        <input type="checkbox" name="ochtend" value="ochtend"> ochtend <br>
                        <input type="checkbox" name="middag" value="middag"> middag <br>
                        <input type="checkbox" name="avond" value="avond"> avond <br>
                        <label> aantal personen</label><br>
                        <input type="number" name="personen" min="10" max="120"><br>
                        </section>
                        <section id="form-part-2">
                        <!-- part 2 -->
                        <label> Voornaam </label>    
                        <input type="text" name="naam" value="Mickey">
                       <label> achternaam </label>    
                        <input type="text" name="achternaam" value="Mouse">
                        <br>
                        <input type="hidden" id="tracefield" name="tracefield" value="<?= $option; ?>">
                        <input type="submit" value="Submit">
                        </section>

                    </form>
                </section>
        </section>
    </section>
            
        <section class="information-menu">
            <section class="information-reserveren menu-box">
                <p class="information-title"> vragen? </p>
                <div><button class="main-button margin-button"> contact </button></div>
            </section>

        </section>
    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?> 




