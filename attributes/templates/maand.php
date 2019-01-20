<?php include_once('./attributes/templates/head.php'); ?>
<?php include_once('./attributes/templates/header-small.php'); ?>

<?php
$testd = date("Y-m-d");
$vandaag = date("Y-m-d", strtotime($testd));
$vandaagm = date("m", strtotime($vandaag));
$vandaagy = date("Y", strtotime($vandaag));;

$dagen =cal_days_in_month(CAL_GREGORIAN,$vandaagm,$vandaagy);


// First day of the month.
$eerstedag = date('Y-m-01', strtotime($vandaag));
$new_date = $eerstedag;
// // Last day of the month.
// echo date('Y-m-t', strtotime($query_date));

$date = '2019-03-20';
$eerstedagNummer = date('N', strtotime($eerstedag));

$x = 1; 
$i = 0;
$dn = 0;
$tvj = 0;
$exstadagen = 0;

if ($eerstedagNummer == 0 && $dn == 0)  {
    $exstadagen = 6; $dn = 1;
}
if ($eerstedagNummer == 1 &&  $dn == 0) {
    $exstadagen = 0; $dn = 1;
}
if ($eerstedagNummer == 2 &&  $dn == 0) {
    $exstadagen = 1; $dn = 1;
}
if ($eerstedagNummer == 3 &&  $dn == 0) {
    $exstadagen = 2; $dn = 1;
}
if ($eerstedagNummer == 4 &&  $dn == 0) {
    $exstadagen = 3; $dn = 1;
}
if ($eerstedagNummer == 5 &&  $dn == 0) {
    $exstadagen = 4; $dn = 1;
}
if ($eerstedagNummer == 6 &&  $dn == 0) {
    $exstadagen = 5; $dn = 1;
}

require_once "./attributes/templates/dbcon.php";

$sql = "SELECT * FROM resenper2 ORDER BY idres DESC";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($reservering = $result->fetch_assoc()) {
        $idres2[] = $reservering["idres"];
        $dagdeelo2[] = $reservering["dagdeelo"];
        $dagdeelm2[] = $reservering["dagdeelm"];
        $dagdeela2[] = $reservering["dagdeela"];
        $acc2[] = $reservering["accepted"];
        $dag2[] = $reservering["dag"];
        $arragement2[] = $reservering["arragement"];
        $idresSQL2[] = 1;
        $idresSQL2[] = intval($idres);
        $acc2 = $reservering["accepted"];
    }
} else {
    echo 'db fail';
}

$ddn = 1;
$countdag = count($dag2);
?>

<section class="kalender">
    <section class="kalender-title title">
        <p> _ <?= date("l jS \of F Y ", strtotime($vandaag)); ?> _ <?= date("Y-m-d", strtotime($vandaag)); ?> _ </p>
    </section>
        <section class="week">
            <section class="weeknaam">
                <p>maandag</p>
            </section>
            <section class="weeknaam">
                <p>dinsdag</p>
            </section>
            <section class="weeknaam">
                <p>woensdag</p>
            </section>
            <section class="weeknaam">
                <p>donderdag</p>
            </section>
            <section class="weeknaam">
                <p>vrijdag</p>
            </section>
            <section class="weeknaam">
                <p>zaterdag</p>
            </section>
            <section class="weeknaam">
                <p>zondag</p>
            </section>
        </section>
        <section class="dagen">
        <?php
        while($i+1 <= $exstadagen) {
            ?>
                <section class="dag gray">
                    <section class="dag-title">
                        vorige maand
                    </section>
                </section> 
                <?php
                $i++;
            } 

        while($x <= $dagen) {
            ?>
        <section class="dag" <?php if ( $new_date == $vandaag){ ?> id="vandaag" <?php  } ?> >
            <section class="dag-title">
                <?= $new_date ?>
            </section>
            <?php 
            while($ddn <= $countdag) {
                $ddnc = $ddn -1;
                if ($dag2[$ddnc] == "$new_date"){
                    ?> <p class="greserveerd" <?php if ( $acc[$ddnc] == 1){ ?> id="bevestigd" <?php  } ?>> <?= $arragement2[$ddnc] ?> </p> <?php
                }
                $ddn++;
            } $ddn = 1; ?>
            
        </section> 
        <?php
        $new_date = date('Y-m-d', strtotime($new_date . ' +1 day'));
        $x++;
        } ?>
        </section>
    </section>

    
<?php        
    $aantalres2 = count($idres2);
    $aantalacc = count($acc2);
    $notacc = 0;
    $acc = 1;
    $ddnca = 0;
    while($acc <= $aantalacc) {
        $ddnca = $acc -1;
        if ($acc2[$ddnc] == "$new_date"){
          $notacc = $notacc + 1;
        }
        $acc++;
    } $acc = 1; ?>
<section class=reservering>
    <section class="gegevens-tabel">
<p class="information-prijs-tabel"> <?php if($aantalres2 == 1){ ?> Er is <?=  $aantalres2 ?> een reservering waarvan <?php }else{?> Er zijn  <?=  $aantalres2 ?> reserveringen <?php } ?> waarvan  <?=  $notacc ?> openstaand  </p>
    </section>
</section>

</section>

