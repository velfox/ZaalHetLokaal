
<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 

<section class="information">
    <section class="information-conainer">

        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
            <section class="information-box-title">
                <p class="information-title" > test ophalen 1 <p>
            </section>
                <section class="information-box">
                <?php require_once "./attributes/templates/ophalenenkel.php"; ?>
                </section>
            <!-- end informatie container -->
        </section>
    </section>
        
    <section class="information-menu">
        <section class="information-reserveren menu-box">
            <p class="information-title"> Wij gaan het voor u regelen! </p>
            <div><button class="main-button margin-button"> reserveren </button></div>
            <div><button class="main-button margin-button"> contact </button></div>
        </section>
        <?php include_once('./attributes/templates/algemene-blokken/menubox.php'); ?> 
        </section>
    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?> 




