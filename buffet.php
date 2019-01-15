
<?php 
include_once('./attributes/templates/head.php');
?> 
<?php 
include_once('./attributes/templates/header-small.php');
?> 
<?php
    require_once "./attributes/templates/dbcon.php";             
?>

<section class="information">
    <section class="information-conainer">

        <section class="information-content">
            <!-- start informatie conteiner -->
            <section id="box1" class="activebox informatie-blok-container">
            <section class="information-box-title">
                <p class="information-title" > buffet <p>
            </section>
                <section class="information-box">
                    <p class="information-lead"> Een buffet, koud of warm, is een mooie manier om het een ieder naar de zin te maken; iedereen kan naar behoefte en smaak zijn keuze maken. Bovendien wordt gemakkelijk van plaats gewisseld. Buffetten zijn er in vele smaken en soorten. </p>
                    <p class="information-text"> we gaan uit van een koud buffet wat u naar eigen smaak en idee kunt aanvullen.  </p>

                    <p class="information-som">- pate, boerenham, rosbief, rauwe ham vers van het mes  </p>
                    <p class="information-som">- garnalen, gerookte makreel, krabsticks, zure haring </p>
                    <p class="information-som">- vleessalade, tonijnslalade, selderijsalade, eierensalade </p>
                    <p class="information-som">- tomatensalade met mozzarella en olijfolie </p>
                    <p class="information-som">- cocktailsaus, knoflooksaus, honing-mosterdsaus </p>
                    <p class="information-som">- diverse soorten brood, stokbrood, roomboter, kruidenboter en pesto alles geserveerd van een buffettafel, brood uit de broodkar </p>
                    <p class="information-prijs" > Prijs 23,50 per persoon ( Vanaf 20 personen ) <p>
                </section>
            <!-- end informatie container -->
            <!-- start informatie conteiner -->
                <section class="information-box-title">
                    <p class="information-title" > Extra bijlage <p>
                </section>
                <section class="information-box">
                    <p class="information-text"> keuze uit; </p>

                    <p class="information-som">- tomatensoep </p>
                    <p class="information-som">- mosterdsoep </p>
                    <p class="information-som">- vissoep </p>
                    <p class="information-som">- aspergesoep </p>
                    <p class="information-som">- groentesoep</p>
                    <p class="information-som">- champignonsoep </p>
                    <p class="information-som">- runderbouillon met  tuinkruiden </p>
                    <p class="information-som">- aspergesoep </p>
                    <p class="information-som">- groentesoep</p>
                    <p class="information-som">- champignonsoep </p>
                    <p class="information-prijs" > Prijs € 4.75 per persoon <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section id="box2" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > vis   </p>
                </section>
                <section class="information-box">

                <?php
                    $sql = "SELECT * FROM aanvulling WHERE groep='vis'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];

                            ?>
                            <section class="prijs-tabel">
                                <p class="information-naam"> <?= $aanvulling ?> </p> <p class="information-prijs-tabel">  <?= $prijs ?>  </p>
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen vis aanvullingen gevonden";
                    }
                ?>
                </section>
                <section class="information-box-title">
                    <p class="information-title" > vlees   </p>
                </section>
                <section class="information-box">

                <?php 
                    $sql = "SELECT * FROM aanvulling WHERE groep='vlees'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];

                            ?>
                            <section class="prijs-tabel">
                                <p class="information-naam"> <?= $aanvulling ?> </p> <p class="information-prijs-tabel">  <?= $prijs ?>  </p>
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen vlees aanvullingen gevonden";
                    }
                ?>
                </section>
                <section class="information-box-title">
                    <p class="information-title" > groenten  </p>
                </section>
                <section class="information-box">

                <?php 
                    $sql = "SELECT * FROM aanvulling WHERE groep='groen'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];

                            ?>
                            <section class="prijs-tabel">
                                <p class="information-naam"> <?= $aanvulling ?> </p> <p class="information-prijs-tabel">  <?= $prijs ?>  </p>
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen vlees aanvullingen gevonden";
                    }
                ?>
                </section>
        </section>
            <!-- start informatie conteiner -->
            <section  id="box3" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > HOLLANDS STAMPPOT BUFFET <p>
                </section>
                <section class="information-box">
                    <p class="information-som">- erwtensoep met roggebrood en katenspek  </p>
                    <p class="information-som">- hutspot </p>
                    <p class="information-som">- stamppot boerenkool  </p>
                    <p class="information-som">- stamppot zuurkool  </p>
                    <p class="information-som">- gehaktballetjes in bruine jus </p>
                    <p class="information-som">- rookworst </p>
                    <p class="information-som">- gebakken speklapjes </p>
                    <p class="information-som">- draadjesvlees in jus  </p>
                    <p class="information-som">- braadworst</p>
                    <p class="information-som">- augurken en zilveruitjes in het zuur </p>
                    <p class="information-som">- pittige Groninger mosterd en zachte milde mosterd  </p>
                    <p class="information-prijs" > Prijs € 27,50 per persoon <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section  id="box4" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > ITALIAANS BUFFET <p>
                </section>
                <section class="information-box">
                    <p class="information-som">- pomodorisoep </p>
                    <p class="information-som">- carpaccio van rundvlees op sla geserveer </p>
                    <p class="information-som">- salade van ruccola, zongedroogde tomaatjes en parmazaan   </p>
                    <p class="information-som">- gehaktballetjes met Toscaanse tomatensaus  </p>
                    <p class="information-som">- warme visschotel met blanke saus en kaas op Napels wijze</p>
                    <p class="information-som">- Lasange Milanse  </p>
                    <p class="information-som">- pizzapunten in diverse smaken </p>
                    <p class="information-som">- penne riagte   </p>
                    <p class="information-som">- fussili tricolore </p>
                    <p class="information-som">- gemengde olijven </p>
                    <p class="information-som">- ciabata, foccacia, tomatentapenade  </p>
                    <p class="information-prijs" > Prijs € 27,50 per persoon <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section  id="box5" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > Dessert buffet  <p>
                </section>
                <section class="information-box">
                    <p class="information-som">- diverse soorten ijs  </p>
                    <p class="information-som">- bavarois </p>
                    <p class="information-som">- omelet Siberien </p>
                    <p class="information-som">- vers fruit  </p>
                    <p class="information-som">- chocolademousse</p>
                    <p class="information-som">- heerlijke dessertsaus </p>
                    <p class="information-som">- slagroom  </p>
                    <p class="information-prijs" > Prijs € 12,50 per persoon <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section  id="box6" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > Feestarrangement  <p>
                </section>
                <section class="information-box">
                    <p class="information-som">- koffie met gebak bij binnenkomst  </p>
                    <p class="information-som">- vrij drinken  </p>
                    <p class="information-som">- nootjes op tafel </p>
                    <p class="information-som">- vijf keer warme bittergarnituur </p>
                    <p class="information-som">- koffie met broodjes ter afsluiting </p>
                    <p class="information-prijs" > Prijs € 23,50 per persoon <p>
                </section>
            <!-- end informatie container -->
                <section class="information-box-title">
                    <p class="information-title" > Extra bijlage  <p>
                </section>
                <section class="information-box">
                    <p class="information-text"> Het feest arrangement duurt van 20.00 tot 01.00 uur en geldt vanaf 80 personen; dit arrangement kunt u als basis zien waarin we in overleg alles kunnen veranderen en toevoegen, zoals de ijscokar, gebaksbuffet bij de koffie of warme beenham in plaats van bittergarnituur <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section  id="box7" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > ijscokar  <p>
                </section>
                <section class="information-box">
                    <p class="information-text"> Een leuk idee is de ijscokar! De ijscoman komt met zijn kar in de zaal en u kunt onbeperkt schepijs eten  </p>
                    <p class="information-prijs" > Prijs € 5,50 per persoon <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section  id="box8" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > Aanvulling  <p>
                </section>
                <section class="information-box">
                    <p class="information-text"> Onderstaande lijst kan nog met veel mogelijkheden uitgebreid worden; vraag het ons!  <p>
                </section>
            </section>
            <!-- end informatie container -->
            <section  id="box8" class="informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > ijscokar  <p>
                </section>
                <section class="information-box">
                    <p class="information-text"> Een leuk idee is de ijscokar! De ijscoman komt met zijn kar in de zaal en u kunt onbeperkt schepijs eten  </p>
                    <p class="information-prijs" > Prijs € 5,50 per persoon <p>
                </section>
            </section>
            <!-- end informatie container -->
        </section>

        
        <section class="information-menu">
            <section class="information-reserveren menu-box">
                <p class="information-title"> Wij gaan het voor u regelen! </p>
                <div><button class="main-button margin-button"> reserveren </button></div>
                <div><button class="main-button margin-button"> contact </button></div>
            </section>
            <section class="information-options menu-box">
                <p class="information-title"> opties arragenment </p>
                <div><button id="button-box1"class="main-button margin-button bt-options"> buffet </button></div>
                <div><button id="button-box2"class="main-button margin-button bt-options"> aanvullingen / wijzigingen </button></div> 
                <div><button id="button-box3"class="main-button margin-button bt-options"> hollands stampotten buffet </button></div> 
                <div><button id="button-box4"class="main-button margin-button bt-options"> italiaans buffet </button></div>
                <div><button id="button-box5"class="main-button margin-button bt-options"> dessert buffet </button></div> 
                <div><button id="button-box6"class="main-button margin-button bt-options"> feest arrangement </button></div> 
                <div><button id="button-box7"class="main-button margin-button bt-options"> ijscokar </button></div> 
            </section>
            <?php 
                include_once('./attributes/templates/algemene-blokken/menubox.php');
            ?> 

        </section>
    </section>
</section>

<?php 
include_once('./attributes/templates/footer.php');
?> 




