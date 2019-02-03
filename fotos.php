
<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 

<section class="information">
    <section class="information-conainer">

                <section class="information-menu">
            <section class="menu-box menufoto">
                <section class="background-editor">
                    <p class="title"> selecteer een foto </p>
                    <section class="background-options">
                        <section id="b1" class="background">
                            <img class="fotooption" src="/attributes/img/fotos/parkeerplaats.jpg" alt="">De Parkeerplaats
                        </section>
                        <section id="b2" class="background">
                            <img class="fotooption" src="/attributes/img/fotos/ingang.jpg" alt="">Ingang
                        </section>
                        <section id="b3" class="background foto-active">
                            <img class="fotooption" src="/attributes/img/fotos/zaal.jpg" alt="">De zaal
                        </section>
                        <section id="b4" class="background">
                            <img class="fotooption" src="/attributes/img/fotos/bar.jpg" alt="">De bar
                        </section>
                    </section>
                </section>
            </section>
        </section>


        <section class="information-content">


        <section id="box1" class="activebox informatie-blok-container">
            <section class="information-box-title">
                <p class="information-title foto-title2" > De zaal <p>
            </section>
                <section class="information-box">
                    <section class="fotoplaceholder">
                </section>
                 
                </section>
            <!-- end informatie container -->
        </section>
    </section>
        

    </section>
</section>

<?php include_once('./attributes/templates/footer.php'); ?> 

<script>
$('.background').click(function(){
    console.log("tik");
    var selectbg = $(this).attr('id');
    var titlef = $(this).text();
    var gdclass =  "#" + selectbg + " img";
    var actclass =  "#" + selectbg; 
    var images = $(gdclass).attr('src');
    $(".background").removeClass('foto-active');
    $(actclass).addClass('foto-active');
    $('.fotoplaceholder').css("background-image", "url(" + images + ")");
    $(".foto-title2").text(titlef);
});
</script>


