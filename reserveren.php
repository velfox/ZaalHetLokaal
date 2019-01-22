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
                    <p class="information-title"> verzonden! </p>
                </section>
                <section class="information-box">
                    <p class="information-lead">Uw reservering is verzonden! binnen 2 werkdagen krijgt u van ons
                        bericht </p>
                </section>
                <!-- end informatie container -->
            </section>
            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title"> overzicht </p>
                </section>
                <section class="information-box">
                    <?php include_once('./attributes/templates/reserveringophalen.php'); ?>
                </section>
                <!-- end informatie container -->
            </section>
        </section>
        <?php } else { ?>
        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title"> Reserveren
                        <?= $option; ?>
                    </p>
                </section>
                <section class="information-box">
                    <p class="information-lead"> U kunt hieronder de gegevens invullen om te reserveren, Hierna wordt
                        deze reservering verwerkt. binnen 2 werkdagen krijgt u van ons bericht </p>
                </section>
                <!-- end informatie container -->
            </section>



            <?php if (isset($errors) && !empty($errors)) { ?>
                <section id="box1" class="activebox informatie-blok-container">
                    <section class="information-box-title">
                        <p class="information-title"> Oeps.. U bent de volgende dingen vergeten in te vullen. </p>
                    </section>
                    <section class="information-box">
                        <?php for ($i = 0; $i < count($errors); $i++) { ?>
                        <section class="prijs-tabel">
                            <p class="information-naam">
                                <?= $errors[$i]; ?>
                            </p>
                        </section>
                        <?php } ?>
                    </section>
                </section>
            <?php } ?>

            <section id="box1" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title"> formulier </p>
                </section>
                <section action="formchek.php" class="form-box">
                    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                        <!-- part 1 -->
                        <section id="form-part-1">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Selecteer de datum <p>
                                </section>
                                <div class="datecontainer">
                                 <input id="date" type="date" name="datum" required>
                                    <div id="melding"></div>
                                </div>
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Selecteer de dagdelen <p>
                                </section>
                                <p class="information-naam"> <input id="checkbox_1" type="checkbox" name="ochtend" value="ochtend"> ochtend </p>
                                <p class="information-naam"> <input id="checkbox_1" type="checkbox" name="middag" value="middag"> middag </p>
                                <p class="information-naam"> <input id="checkbox_1" type="checkbox" name="avond" value="avond"> avond </p>
                                <span class="">
                                    <?= isset($errors['dagdeel']) ? $errors['dagdeel'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> hoeveel personen verwacht u? <p>
                                </section>
                                <label></label><br>
                                <input type="number" name="personen" min="10" max="120" placeholder="Aantal personen" required><br>
                                <span class="">
                                    <?= isset($errors['personen']) ? $errors['personen'] : '' ?></span>
                            </div>
                        </section>

                        <!-- part 2 aanvullingen-->

                        <!-- aanvullingen bbq -->
                        <?php if( $option == "bbq"){ ?>
                        <section id="form-part-2">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Gewenst arragement <p>
                                </section>
                                <p class="information-naam"> <input type="radio" name="arragamentPakket" value="1" checked> clubbarbecue </p>
                                <p class="information-naam"> <input type="radio" name="arragamentPakket" value="2"> party barbecue </p>
                                <p class="information-naam"> <input type="radio" name="arragamentPakket" value="3"> club barbecue luxe </p>
                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                        </section>
                        <?php } ?>
                        
                        <!-- aanvullingen HighTea -->
                        <?php if( $option == "HighTea"){ ?>
                        <section id="form-part-2">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Gewenst arragement <p>
                                </section>
                                <input type="radio" name="arragamentPakket" value="45" checked> High Tea <br>
                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                        </section>
                        <?php } ?>

                    <!-- aanvullingen kookworkshop -->
                    <?php if( $option == "kookworkshop"){ ?>
                        <section id="form-part-2">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Gewenst arragement <p>
                                </section>
                                <input type="radio" name="arragamentPakket" value="57" checked> kookworkshop <br>
                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                        </section>
                        <?php } ?>
                            
                        <!-- aanvullingen lunch -->
                        <?php if( $option == "lunch"){ ?>
                        <section id="form-part-2">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Gewenst arragement <p>
                                </section>
                                <input type="radio" name="arragamentPakket" value="11" checked> koffietafel royal <br>
                                <input type="radio" name="arragamentPakket" value="46"> koffietafel royal luxe <br>
                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                        </section>
                        <?php } ?>

                        <!-- aanvullingen buffet -->
                        <?php if( $option == "buffet"){ ?>
                        <section id="form-part-2">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Gewenst arragement <p>
                                </section>

                                <p class="information-naam"><input type="radio" name="arragamentPakket" value="4" checked> Buffet </p>
                                <p class="information-naam"><input type="radio" name="arragamentPakket" value="5"> Hollands stampppot buffet </p>
                                <p class="information-naam"><input type="radio" name="arragamentPakket" value="6">Itliaans buffet </p>
                                <p class="information-naam"><input type="radio" name="arragamentPakket" value="7"> Feestavond arrangement </p>
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> aanvullingen op arragement <p>
                                </section>
                                <p class="information-naam"><input type="checkbox" name="arragamentPakketAanvulling[]" value="8"> Dessert buffet </p>
                                <p class="information-naam"><input type="checkbox" name="arragamentPakketAanvulling[]" value="9"> ijscokar <p>
                                <?php include_once('./attributes/templates/form/aanvullingen-buffet.php'); ?>

                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                        </section>
                        <?php } ?>

                                            <!-- aanvullingen vergadering -->
                                            <?php if( $option == "vergadering"){ ?>
                        <section id="form-part-2">
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Gewenst arragement <p>
                                </section>
                                <input type="radio" name="arragamentPakket" value="53" checked> zaalhuur <br>
                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> aanvullingen op arragement <p>
                                </section>
                                <input type="checkbox" name="arragamentPakketAanvulling[]" value="47"> koffie, thee <br>
                                <input type="checkbox" name="arragamentPakketAanvulling[]" value="48"> frisdrank <br>
                                <input type="checkbox" name="arragamentPakketAanvulling[]" value="49"> vergader arrangement, onbeperkt koffie, thee, water, cake <br>
                            </div>
                        </section>
                        <?php } ?>


                        <section id="form-part-3">
                            <!-- part 3 -->
                            <section class="information-box-title">
                                <p class="information-title"> contact gegevens <p>
                            </section>
                            <div class="data-field">
                                <!-- <label> Voornaam </label>     -->
                                <input type="text" name="naam"  placeholder="Uw voornaam" required>
                                <span class="">
                                    <?= isset($errors['naam']) ? $errors['naam'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <!-- <label> achternaam </label>     -->
                                <input type="text" name="achternaam"  placeholder="Uw achternaam" required>
                                <span class="">
                                    <?= isset($errors['achternaam']) ? $errors['achternaam'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <input type="email" name="email"  placeholder="Uw e-mail" required>
                                <span class="">
                                    <?= isset($errors['email']) ? $errors['email'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <!-- <label> telefoonnummer </label>     -->
                                <input type="text" name="tel"placeholder="Uw telefoonnummer" required>
                                <span class="">
                                    <?= isset($errors['tel']) ? $errors['tel'] : '' ?></span>
                            </div>
                            <input type="hidden" id="tracefield" name="tracefield" value="<?= $option; ?>">
                            <section class="information-box-title">
                                <p class="information-title"> afronden <p>
                            </section>
                            <div class="data-field">
                            <section class="voltiooien">
                            <p class="information-naam"><input type="checkbox" name="voorwaarden accoord" value="acc" required> Ik ga akkoord met de algemene voorwaarden *  </p>
                            <input class="main-button" type="submit" name="submit" value="Reserveren"/>
                            </div>
                        </section>
                        
                    </form>
                </section>
                <!-- <section class="information-reserveren menu-box">
                <p class="information-title"> vragen? </p>
                <div><button class="main-button margin-button"> contact </button></div>
            </section> -->
            </section>
        </section>
        <?php } ?>
    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?>