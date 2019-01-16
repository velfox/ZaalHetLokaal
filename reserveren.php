<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 
<?php include_once('./attributes/templates/formchek.php'); ?> 


<section class="information">
    <section class="information-conainer">

    <?php if (isset($success)) { ?>
        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > verzonden! </p>
                </section>
                <section class="information-box">
                    <p class="information-lead">Uw reservering is verzonden! binnen 2 werkdagen krijgt u van ons bericht </p>
                </section>
            <!-- end informatie container -->
            </section>
            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > overzicht </p>
                </section>
                <section class="information-box">
                <?php include_once('./attributes/templates/ophalenenkel.php'); ?> 
                </section>
            <!-- end informatie container -->
            </section>
        </section>
    <?php } else { ?>
        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > Reserveren <?= $option; ?> </p>
                </section>
                <section class="information-box">
                    <p class="information-lead"> U kunt hieronder de gegevens invullen om te reserveren, Hierna wordt deze reservering verwerkt. binnen 2 werkdagen krijgt u van ons bericht </p>
                    <?php if (isset($errors) && !empty($errors)) { ?>
                    <ul class="errors">
                        <?php for ($i = 0; $i < count($errors); $i++) { ?>
                            <li><?= $errors[$i]; ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>

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
                            <section class="information-box-title">
                                <p class="information-title" > Selecteer de datum <p>
                            </section>
                                <input type="date" name="datum">
                                <span class="error"><?= isset($errors['datum']) ? $errors['datum'] : '' ?></span>
                            </div>
                            <div class="data-field">
                            <section class="information-box-title">
                                <p class="information-title" > Selecteer de dagdelen <p>
                            </section>
                                <input type="checkbox" name="ochtend" value="ochtend"> ochtend <br>
                                <input type="checkbox" name="middag" value="middag"> middag <br>
                                <input type="checkbox" name="avond" value="avond"> avond <br>
                                <span class=""><?= isset($errors['dagdeel']) ? $errors['dagdeel'] : '' ?></span>
                            </div>
                                <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title" > hoeveel personen verwacht u? <p>
                                 </section>
                                <label></label><br>
                                <input type="number" name="personen" min="10" max="120"><br>
                                <span class=""><?= isset($errors['personen']) ? $errors['personen'] : '' ?></span>
                            </div>
                        </section>
                       
                                <!-- part 2 aanvullingen-->

                            <!-- aanvullingen bbq -->
                            <?php if( $option == "bbq"){ ?>
                                <section id="form-part-2">
                                    <div class="data-field">
                                    <section class="information-box-title">
                                        <p class="information-title" > Gewenst arragement <p>
                                    </section>
                                        <input type="radio" name="arragamentPakket" value="club barbecue" checked> club barbecue <br>
                                        <input type="radio" name="arragamentPakket" value="party barbecue"> party barbecue <br>
                                        <input type="radio" name="arragamentPakket" value="club barbecue luxe"> club barbecue luxe <br>
                                        <span class=""><?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                                    </div>
                                </section>
                            <?php } ?>
                            <!-- aanvullingen buffet -->
                            <?php if( $option == "buffet"){ ?>
                                <section id="form-part-2">
                                    <div class="data-field">
                                    <section class="information-box-title">
                                        <p class="information-title" > Gewenst arragement <p>
                                    </section>
                                        <input type="radio" name="arragamentPakket" value="4" checked> Buffet <br>
                                        <input type="radio" name="arragamentPakket" value="5"> Hollands stampppot buffet <br>
                                        <input type="radio" name="arragamentPakket" value="6">Itliaans buffet <br>
                                        <input type="radio" name="arragamentPakket" value="7"> Feestavond arrangement <br>
                                        <span class=""><?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                                    </div>
                                    <div class="data-field">
                                    <section class="information-box-title">
                                        <p class="information-title" > aanvullingen op arragement  <p>
                                    </section>
                                        <input type="checkbox" name="arragamentPakketAanvulling[]" value="8"> Dessert buffet <br>
                                        <input type="checkbox" name="arragamentPakketAanvulling[]" value="9"> ijscokar <br>
                                        <?php include_once('./attributes/templates/form/aanvullingen-buffet.php'); ?> 

                                        <span class=""><?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                                    </div>
                                </section>
                            <?php } ?>
                            

                        <section id="form-part-3">
                                <!-- part 3 -->
                            <section class="information-box-title">
                                <p class="information-title" > contact gegevens  <p>
                            </section>
                            <div class="data-field">
                                <label> Voornaam </label>    
                                <input type="text" name="naam" value="Mickey">
                                <span class=""><?= isset($errors['naam']) ? $errors['naam'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <label> achternaam </label>    
                                <input type="text" name="achternaam" value="Mouse">
                                <span class=""><?= isset($errors['achternaam']) ? $errors['achternaam'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <label> email </label>    
                                <input type="text" name="email" value="Mouse@disney.com">
                                <span class=""><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <label> telefoonnummer </label>    
                                <input type="text" name="tel" value="0348-402391">
                                <span class=""><?= isset($errors['tel']) ? $errors['tel'] : '' ?></span>
                            </div>
                                <input type="hidden" id="tracefield" name="tracefield" value="<?= $option; ?>">
                            <div class="data-field">    
                                <input type="submit" name="submit" value="Save"/>
                            </div>
                        </section>
                    </form>
                </section>
        </section>
    </section>
    <?php } ?>
        <section class="information-menu">
            <section class="information-reserveren menu-box">
                <p class="information-title"> vragen? </p>
                <div><button class="main-button margin-button"> contact </button></div>
            </section>

        </section>
    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?> 

SELECT reservering.id as idres, reservering.dagdeelm, reservering.dagdeelo, reservering.dagdeela, reservering.accepted, reservering.dag, reservering.arragement, persoon.naam, persoon.achternaam, persoon.email, persoon.tel, persoon.id as idper
FROM reservering
INNER JOIN persoon ON reservering.persoon_id = persoon.id;