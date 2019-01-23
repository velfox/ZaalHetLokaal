
<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 

<section class="information">
    <section class="information-conainer">

        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
            <section class="information-box-title">
                <p class="information-title" > Contact <p>
            </section>
                <section class="information-box">
                    <p class="information-lead"> U kunt via onderstaan formulier, ons telefoonnummer of emailadres contact op nemen. binnen 2 werkdagen krijgt u van ons bericht </p>
                </section>
            <!-- end informatie container -->
        </section>

                    <section id="box1" class="activebox informatie-blok-container">
            <section class="information-box-title">
                <p class="information-title" > Contact Formulier <p>
            </section>
                <section class="information-box">
                <div class="container">
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        
                        <p class="information-naam">Uw bericht</p>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" name="contact" value="verzenden">
                    </form>
                    </div>
                </section>
            <!-- end informatie container -->
        </section>
    </section>
        
    <section class="information-menu">
        <section class="information-reserveren menu-box">
            <p class="information-title">  </p>
            <section class="footerblok">
                    <p class="title"> Zaal het Lokaal </p>
                    <p> Heicop 24C </p>
                    <p> 3628 AJ Kockengen </p>
                    <p> 0346241720 </p>
                </section>
        </section>
        </section>
    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?> 




