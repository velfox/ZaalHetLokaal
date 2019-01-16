<?php include_once('./attributes/templates/head.php'); ?> 
<?php include_once('./attributes/templates/header-small.php'); ?> 

<?php
require_once "./attributes/templates/dbcon.php";

$totaalprijs = 00.00;

$sql = "SELECT * FROM resenper2 ";
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
                <p class="status">  status: <?php $acc ?> </p>
            </section>
            <section class="gegevens">    
                <section class="persoon">
                    <p class="naam"> Naam: <?= $naam ?> </p>
                    <p class="achternaam"> achternaam: <?= $achternaam ?> </p>
                    <p class="email"> email: <?= $email ?> </p>
                    <p class="tel"> Telefoon: <?= $tel ?> </p>

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
                                        
                                        <p class="pakket-naam"> aanvulling: <?= $aanvulling ?>   </p>
                                        <p class="pakket-prijs"> prijsaanvulling: <?= $prijs ?> € </p>

                                        <?php
                                    }
                                }
                        } }  ?>
                            <p class="totaalprijs"> Totaal: <?= $totaalprijs ?> € </p>
                        </section>
                        <section class="actions">
                        <button class="main-button"> verweideren </button>
                        <button class="main-button"> Aanpassen </button>
                    </section>
                    </section>

                </section> 
            </section>
        </section>

        <?php

          
    }
}

