<?php include_once('./attributes/templates/head.php'); ?>
<?php include_once('./attributes/templates/header-small.php'); ?>

<?php
session_start();
$vandaag = date("Y-m-d");
$vandaagm = date("m");
$vandaagy = date("Y");;

$dagen =cal_days_in_month(CAL_GREGORIAN,$vandaagm,$vandaagy);






// First day of the month.
$eerstedag = date('Y-m-01', strtotime($vandaag));
$new_date = $eerstedag;
// // Last day of the month.
// echo date('Y-m-t', strtotime($query_date));

$date = '2019-01-20';
$eerstedagNummer = date('N', strtotime($eerstedag));

$x = 1; 
$i = 0;
$dn = 0;
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

        $idres[] = $reservering["idres"];
        $dagdeelo[] = $reservering["dagdeelo"];
        $dagdeelm[] = $reservering["dagdeelm"];
        $dagdeela[] = $reservering["dagdeela"];
        $acc[] = $reservering["accepted"];
        $dag[] = $reservering["dag"];
        $aantalpersoonen[] = $reservering["personen"];
        $arragement[] = $reservering["arragement"];
        $naam[] = $reservering["naam"];
        $achternaam[] = $reservering["achternaam"];
        $email[] = $reservering["email"];
        $tel[] = $reservering["tel"];
        $idper[] = $reservering["idper"];
        $idresSQL[] = 1;
        $idresSQL[] = intval($idres);
    }
} else {
    echo 'db fail';
}

echo $idres[0];
echo count($idres);
echo $countdag = count($dag);
?>

<section class="kalender">
    <section class="kalender-title">
        <p> _ <?= date("l jS \of F Y "); ?> _ <?= date("Y-m-d"); ?> _ </p>
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
            while($y <= $countdag) {
                if( $dag[$y] == $new_date){
                 ?> <p> gereserveerd: <?= $arragement[$y] ?> <?php 
                }
                $y++;
            } ?>
        <?php
        $new_date = date('Y-m-d', strtotime($new_date . ' +1 day'));
        $x++;
        } ?>
        </section>
    </section>
</section>
