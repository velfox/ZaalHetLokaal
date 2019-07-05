<?php include_once('./attributes/templates/head.php'); ?>
<?php include_once('./attributes/templates/header-small.php'); ?>

<?php
require_once "./attributes/templates/dbcon.php";

$totaalprijs = 00.00;

$sql = "SELECT * FROM resenper2 WHERE idres=$last_id2";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($reservering = $result->fetch_assoc()) {

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
                <p class="datum"> <?= $dag ?> </p>
                <p class="result-title"> <?= $arragement ?> </p>
            </section>
            <section class="gegevens">
                <section class="persoon">
                    <p class="arragement title"> contact gegevens </p>
                    <section class="gegevens-tabel">
                        <p class="information-naam"> naam </p>
                        <p class="information-prijs-tabel"> <?= $naam ?> </p>
                    </section>
                    <section class="gegevens-tabel">
                        <p class="information-naam"> achternaam </p>
                        <p class="information-prijs-tabel"> <?= $achternaam ?> </p>
                    </section>
                    <section class="gegevens-tabel">
                        <p class="information-naam"> email </p>
                        <p class="information-prijs-tabel"> <?= $email ?> </p>
                    </section>
                    <section class="gegevens-tabel">
                        <p class="information-naam"> Telefoon </p>
                        <p class="information-prijs-tabel"> <?= $tel ?> </p>
                    </section>

                </section class="arragement">
                <section class="aavullingen">
                    <p class="arragement title"> <?= $arragement ?> </p>
                    <?php

                    $sql = "SELECT * FROM aanvulling_reservering WHERE reservering_id='$idresSQL'";
                    $resulta = $db->query($sql);

                    if ($resulta->num_rows > 0) {
                        while ($aanvulling = $resulta->fetch_assoc()) {
                            $aanvullingid = $aanvulling['aanvulling_id'];
                            $sql2 = "SELECT * FROM aanvulling WHERE id='$aanvullingid'";

                            $resultb = $db->query($sql2);
                            if ($resultb->num_rows > 0) {
                                while ($aanvulling2 = $resultb->fetch_assoc()) {
                                    $aanvulling = $aanvulling2['aanvulling'];
                                    $prijs =  $aanvulling2['prijs'];
                                    $totaalprijs = $prijs + $totaalprijs;
                                    ?>
                                    <section class="prijs-tabel">
                                        <p class="information-naam"> <?= $aanvulling ?> </p>
                                        <p class="information-prijs-tabel"> <?= number_format($prijs, 2, ',', ' '); ?> € </p>
                                    </section>
                                <?php
                                }
                            }
                        }
                    }
                    $totaalprijscal = $totaalprijs * $aantalpersoonen
                    ?>
                    <p class="arragement title"> <?= $arragement ?> totaal </p>
                    <section class="prijs-tabel">
                        <p class="information-naam"> Totaal per persoon </p>
                        <p class="information-prijs-tabel"> <?= number_format($totaalprijs, 2, ',', ' ');  ?> € </p>
                    </section>
                    <section class="prijs-tabel">
                        <p class="information-naam"> Totaal x <?= $aantalpersoonen ?> personen </p>
                        <p class="information-prijs-tabel"> <?= number_format($totaalprijscal, 2, ',', ' ');  ?> € </p>
                    </section>
                    <p class="arragement title"> <?= $arragement ?> gegevens </p>
                    <section class="prijs-tabel">
                        <p class="information-naam"> aantal personen personen </p>
                        <p class="information-prijs-tabel"> <?= $aantalpersoonen ?> </p>
                    </section>
                    <?php $totaalprijs = 0; ?>
                </section>
            </section>
        </section>
    <?php
    }
}
