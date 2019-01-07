
<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 

<?php include_once('./attributes/templates/formchek.php'); ?> 


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
                    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                        <!-- part 1 -->
                        <section id="form-part-1">
                            <div class="data-field">
                                <label> Datum </label><br>
                                <input type="date" name="datum">
                                <span class=""><?= isset($errors['datum']) ? $errors['datum'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <label> dagdelen</label>                        <br>
                                <input type="checkbox" name="ochtend" value="ochtend"> ochtend <br>
                                <input type="checkbox" name="middag" value="middag"> middag <br>
                                <input type="checkbox" name="avond" value="avond"> avond <br>
                                <span class=""><?= isset($errors['dagdeel']) ? $errors['dagdeel'] : '' ?></span>
                            </div>
                                <div class="data-field">
                                <label> aantal personen</label><br>
                                <input type="number" name="personen" min="10" max="120"><br>
                                <span class=""><?= isset($errors['personen']) ? $errors['personen'] : '' ?></span>
                            </div>
                        </section>
                        <section id="form-part-2">
                                <!-- part 2 -->
                                <div class="data-field">
                                <label> Voornaam </label>    
                                <input type="text" name="naam" value="Mickey">
                                <span class=""><?= isset($errors['naam']) ? $errors['naam'] : '' ?></span>
                                </div>
                            <div class="data-field">
                                <label> achternaam </label>    
                                <input type="text" name="achternaam" value="Mouse">
                                <span class=""><?= isset($errors['achternaam']) ? $errors['achternaam'] : '' ?></span>
                                <br>
                                <input type="hidden" id="tracefield" name="tracefield" value="<?= $option; ?>">
                            <div class="data-field">    
                                <input type="submit" name="submit" value="Save"/>
                            </div>
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




