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
                                <input type="date" name="datum">
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> Selecteer de dagdelen <p>
                                </section>
                                <input id="checkbox_1" type="checkbox" name="ochtend" value="ochtend"> ochtend <br>
                                <input id="checkbox_1" type="checkbox" name="middag" value="middag"> middag <br>
                                <input id="checkbox_1" type="checkbox" name="avond" value="avond"> avond <br>
                                <span class="">
                                    <?= isset($errors['dagdeel']) ? $errors['dagdeel'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> hoeveel personen verwacht u? <p>
                                </section>
                                <label></label><br>
                                <input type="number" name="personen" min="10" max="120" placeholder="Aantal personen"><br>
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
                                <input type="radio" name="arragamentPakket" value="1" checked> clubbarbecue <br>
                                <input type="radio" name="arragamentPakket" value="2"> party barbecue <br>
                                <input type="radio" name="arragamentPakket" value="3"> club barbecue luxe <br>
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
                                <section class="prijs-tabel">
                                <input type="radio" name="arragamentPakket" value="4" checked> <p class="information-naam"> Buffet </p>
                                </section>
                                <section class="prijs-tabel">
                                <input type="radio" name="arragamentPakket" value="5"> <p class="information-naam"> Hollands stampppot buffet </p>
                                </section>
                                <input type="radio" name="arragamentPakket" value="6">Itliaans buffet <br>
                                <input type="radio" name="arragamentPakket" value="7"> Feestavond arrangement <br>
                                <span class="">
                                    <?= isset($errors['arragement']) ? $errors['arragement'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <section class="information-box-title">
                                    <p class="information-title"> aanvullingen op arragement <p>
                                </section>
                                <input type="checkbox" name="arragamentPakketAanvulling[]" value="8"> Dessert buffet
                                <br>
                                <input type="checkbox" name="arragamentPakketAanvulling[]" value="9"> ijscokar <br>
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
                                <input type="text" name="naam" value="Mickey" placeholder="Voornaam">
                                <span class="">
                                    <?= isset($errors['naam']) ? $errors['naam'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <!-- <label> achternaam </label>     -->
                                <input type="text" name="achternaam" value="Mouse" placeholder="achternaam">
                                <span class="">
                                    <?= isset($errors['achternaam']) ? $errors['achternaam'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <input type="email" name="email" value="Mouse@disney.com" placeholder="e-mail">
                                <span class="">
                                    <?= isset($errors['email']) ? $errors['email'] : '' ?></span>
                            </div>
                            <div class="data-field">
                                <!-- <label> telefoonnummer </label>     -->
                                <input type="text" name="tel" value="0348-402391" placeholder="telefoonnummer">
                                <span class="">
                                    <?= isset($errors['tel']) ? $errors['tel'] : '' ?></span>
                            </div>
                            <input type="hidden" id="tracefield" name="tracefield" value="<?= $option; ?>">
                            <section class="information-box-title">
                                <p class="information-title"> afronden <p>
                            </section>
                            <div class="data-field">
                            <input type="checkbox" name="arragamentPakketAanvulling[]" value="47"> Ik ga acoord met de algemene voorwaarden  <br>
                                <input class="main-button" type="submit" name="submit" value="Reserveren" />
                            </div>
                        </section>
                        
                    </form>
                </section>
                <section class="information-reserveren menu-box">
                <p class="information-title"> vragen? </p>
                <div><button class="main-button margin-button"> contact </button></div>
            </section>
            </section>
        </section>
        <?php } ?>
    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?>