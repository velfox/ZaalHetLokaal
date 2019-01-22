<?php include_once('./attributes/templates/head.php'); ?> 

<?php
require_once "./attributes/templates/dbcon.php";
?>

<section class=reservering>
<section class="gegevens-tabel">
    <p class="information-prijs-tabel"> Allen reserveringen </p>
</section>
</section>

<?php 
if (isset($_POST['accepteren'])) {
    $updateid = $_POST['tracefield'];
    $sql = "UPDATE reservering SET accepted=1 WHERE id='$updateid'";

if (mysqli_query($db, $sql)) {
    ?>
     <section class=reservering>
        <section class="gegevens-tabel">
            <p class="information-prijs-tabel"> Reservering met nummer <?= $updateid ?> geacepteerd </p>
        </section>
    </section>
    <?php
    } else {
        ?>
        <section class=reservering>
        <section class="gegevens-tabel">
            <p class="information-prijs-tabel"> Reservering met nummer <?= $updateid ?> is niet gevonden ! <br> <?php  mysqli_error($db) ?> </p>
        </section>
    </section>
    <?php
    }
}

if (isset($_POST['delete'])) {
    $delid = $_POST['tracefielddel'];
    $sql = "DELETE FROM reservering WHERE id='$delid'";

if (mysqli_query($db, $sql)) {
    ?>
     <section class=reservering>
        <section class="gegevens-tabel">
            <p class="information-prijs-tabel"> Reservering met nummer <?= $delid ?> is verweidert </p>
        </section>
    </section>
    <?php
    } else {
        ?>
        <section class=reservering>
        <section class="gegevens-tabel">
            <p class="information-prijs-tabel"> Reservering met nummer <?= $delid ?> is niet gevonden ! <br> <?php  mysqli_error($db) ?> </p>
        </section>
    </section>
    <?php
    }

    $sql = "DELETE FROM aanvulling_reservering WHERE reservering_id='$delid'";
    if (mysqli_query($db, $sql)) {
        ?>
         <section class=reservering>
            <section class="gegevens-tabel">
                <p class="information-prijs-tabel"> aanvullingen met nummer <?= $delid ?> is verweidert </p>
            </section>
        </section>
        <?php
        } else {
            ?>
            <section class=reservering>
            <section class="gegevens-tabel">
                <p class="information-prijs-tabel"> Reservering met nummer <?= $delid ?> is niet gevonden ! <br> <?php  mysqli_error($db) ?> </p>
            </section>
        </section>
        <?php
        }
}


$totaalprijs = 00.00;

$sql = "SELECT * FROM resenper2 ORDER BY idres DESC";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($reservering = $result->fetch_assoc()) {

        $idres = $reservering["idres"];
        $dagdeelo = $reservering["dagdeelo"];
        $dagdeelm = $reservering["dagdeelm"];
        $dagdeela = $reservering["dagdeela"];
        $acc = $reservering["accepted"];
        $dag = $reservering["dag"];
        $aantalpersoonen = $reservering["personen"];
        $arragement = $reservering["arragement"];
        $naam = $reservering["naam"];
        $achternaam = $reservering["achternaam"];
        $email = $reservering["email"];
        $tel = $reservering["tel"];
        $idper = $reservering["idper"];
        $idresSQL = 1;
        $idresSQL = intval($idres);
        ?>
        

        <section class=reservering>
            <section class="reservering-title title">
                <p class="datum">   <?= $dag ?> </p>
                <p class="result-title">   <?= $arragement ?> </p>
                 <?php if($acc == 0){
                  ?>
                  <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">  
                    <input class="main-button" type="submit" name="accepteren" value="Accepteren" />
                    <input type="hidden" id="tracefield" name="tracefield" value="<?= $idres; ?>">
                  </form>
                  <?php
                }else { ?> <p class="status"> Geaccepteerd </p> <?php }  ?>
                       
             
            </section>
            <section class="gegevens">    
                <section class="persoon">
                <p class="arragement title"> contact gegevens </p>
                <section class="gegevens-tabel">
                    <p class="information-naam"> naam </p> <p class="information-prijs-tabel"> <?= $naam ?> </p>
                </section>
                <section class="gegevens-tabel">
                    <p class="information-naam"> achternaam </p> <p class="information-prijs-tabel"> <?= $achternaam ?> </p>
                </section>
                <section class="gegevens-tabel">
                    <p class="information-naam"> email </p> <p class="information-prijs-tabel"> <?= $email ?> </p>
                </section>
                <section class="gegevens-tabel">
                    <p class="information-naam"> Telefoon </p> <p class="information-prijs-tabel"> <?= $tel ?> </p>
                </section>

                    <p class="arragement title"> acties voor reservering </p>
                    <button class="main-button"> Aanpassen </button>
                    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">  
                        <input class="main-button del" type="submit" name="delete" value="Verweideren" />
                        <input type="hidden" id="tracefield" name="tracefielddel" value="<?= $idres; ?>">
                    </form>
                    </section class="arragement">
                        <section class="aavullingen">
                        <p class="arragement title"> <?= $arragement ?> </p>
                        <?php 
                        
                            $sql = "SELECT * FROM aanvulling_reservering WHERE reservering_id='$idresSQL'";
                            $resulta = $db->query($sql); 
                            
                                if ($resulta->num_rows > 0) {
                                while($aanvulling = $resulta->fetch_assoc()) {
                                    $aanvullingid = $aanvulling['aanvulling_id'];
                                $sql2 = "SELECT * FROM aanvulling WHERE id='$aanvullingid'";
                                $resultb = $db->query($sql2);
                                if ($resultb->num_rows > 0) {
                                    while($aanvulling2 = $resultb->fetch_assoc()) {
                                        $aanvulling = $aanvulling2['aanvulling'];
                                        $prijs =  $aanvulling2['prijs'];
                                        $totaalprijs = $totaalprijs + $prijs;
                                        ?>
                                        <section class="prijs-tabel">
                                            <p class="information-naam"> <?= $aanvulling ?>   </p> <p class="information-prijs-tabel"> <?= $prijs ?> € </p>
                                        </section>
                                        <?php
                                    }
                                }
                        } }  
                        $totaalprijscal = $totaalprijs * $aantalpersoonen
                        ?>
                         <p class="arragement title"> <?= $arragement ?> totaal </p>
                              <section class="prijs-tabel">
                                    <p class="information-naam"> Totaal per persoon </p> <p class="information-prijs-tabel"> <?= $totaalprijs ?> € </p>
                                </section>
                                <section class="prijs-tabel">
                                    <p class="information-naam"> Totaal x <?= $aantalpersoonen ?> personen </p> <p class="information-prijs-tabel"> <?= $totaalprijscal ?> € </p>
                                </section>
                                <p class="arragement title"> <?= $arragement ?> gegevens </p>
                                <section class="prijs-tabel">
                                    <p class="information-naam"> aantal personen  personen </p> <p class="information-prijs-tabel"> <?= $aantalpersoonen ?> </p>
                                </section>
                        </section>
                    </section>
                </section> 

        <?php

          
    }
}

