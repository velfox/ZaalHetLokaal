<script src="https://www.google.com/recaptcha/api.js?render=6LcwLKsUAAAAANZ1p7fRoV1cvFe55dPwr9ccgRmf"></script>

<?php include_once('./attributes/templates/head.php'); ?>
<?php include_once('./attributes/templates/header-small.php'); ?>

<section class="information">
    <section class="information-conainer">
        <?php if (isset($_POST['contact'])) { require_once "./attributes/templates/formchek-contact.php"; ?>
            <section class="information-content">
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
                    <section id="box1" class="activebox informatie-blok-container">
                        <section class="information-box-title">
                            <p class="information-title"> Contact Formulier <p>
                        </section>
                        <section class="information-box">
                            <div class="container">
                                <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                                    <input type="text" id="fname" name="naam" placeholder="Voornaam">
                                    <input type="text" id="lname" name="achternaam" placeholder="Achternaam.">
                                    <input type="text" id="lname" name="email" placeholder="Email adres.">
                                    <textarea id="subject" name="bericht" placeholder="Uw bericht, opmerking of vraag." style="height:200px"></textarea>
                                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                    <input class="main-button" type="submit" name="contact" value="verzenden">
                                </form>
                            </div>
                        </section>
                    </section>
            </section>                

                
                <?php } else { ?>

                    <section class=" information-content">
                                    <!-- start informatie conteiner -->
                                    <section id="box1" class="activebox informatie-blok-container">
                                        <section class="information-box-title">
                                            <p class="information-title"> veronden <p>
                                        </section>
                                        <section class="information-box">                                      
                                            <p class="information-lead"> 
                                            <?php if (isset($errors) && !empty($errors)) { ?>
                                            <?php for ($i = 0; $i < count($errors); $i++) { ?>     
                                                <p class="information-naam"> <?= $errors[$i]; }?> </p> 
                                            <?php } else { ?> Uw bericht is verzonden. binnen 2 werkdagen krijgt u van ons bericht </p> <?php } ?>
                                        </section>
                                        <!-- end informatie container -->     
                                    </section>
                        </section>
                    <?php } ?>
                </section>


            <?php } else { ?>
                <section class="information-content">
                    <!-- start informatie conteiner -->
                    <section id="box1" class="activebox informatie-blok-container">
                        <section class="information-box-title">
                            <p class="information-title"> Contact <p>
                        </section>
                        <section class="information-box">
                            <p class="information-lead"> U kunt via onderstaan formulier, ons telefoonnummer of emailadres contact op nemen. binnen 2 werkdagen krijgt u van ons bericht </p>
                        </section>
                        <!-- end informatie container -->
                    </section>

                    <?php

                    ?>

                    <section id="box1" class="activebox informatie-blok-container">
                        <section class="information-box-title">
                            <p class="information-title"> Contact Formulier <p>
                        </section>
                        <section class="information-box">
                            <div class="container">
                                <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                                    <input type="text" id="fname" name="naam" placeholder="Voornaam">
                                    <input type="text" id="lname" name="achternaam" placeholder="Achternaam">
                                    <input type="text" id="lname" name="email" placeholder="Email adres">
                                    <textarea id="subject" name="bericht" placeholder="Uw bericht, opmerking of vraag."></textarea>
                                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                    <input class="main-button" type="submit" name="contact" value="verzenden">
                                </form>
                            </div>
                        </section>
                    </section>
                </section>
            <?php } ?>

            <!-- sidebar -->
            <section class="information-menu">
                <section class="information-reserveren menu-box">
                    <p class="information-title"> </p>
                    <section class="footerblok">
                        <p class="title"> Zaal het Lokaal </p>
                        <p> Heicop 24C </p>
                        <p> 3628 AJ Kockengen </p>
                        <p class="title p2"> Telefoon </p>
                        <p> Vast: 0346241720 </p>
                        <p> mobiel: 0655331819 </p>
                        <p class="title p2"> Email </p>
                        <p> rhadevos@casema.nl </p>
                    </section>
                </section>
                <iframe class="actAsDiv" width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=nl&amp;q=3628%20AJ%20Kockengen&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            </section>
            <!-- end sidebar -->
        </section>
    </section>


    <?php include_once('./attributes/templates/footer.php'); ?>