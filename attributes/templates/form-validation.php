<?php
//Check if data is valid & generate error if not so
$errors = [];
if ($datum == "") {
    $errors[] = 'datum mag niet leeg zijn.'; //Alternative for errors behind input and not in summary
}
if ($personen == "") {
    $errors[] = 'het aantal personen mag niet leeg zijn.';
}
if ($naam == "") {
    $errors[] = 'naam mag niet leeg zijn.';
}
if ($achternaam == "") {
    $errors[] = 'achternaam mag niet leeg zijn.';
}
if (isset($_POST['ochtend'])){
    if ($ochtend == "") {
        $errors[] = 'ochtend mag niet leeg zijn.';
    }
}
if (isset($_POST['avond'])){
    if ($avond == "") {
        $errors[] = 'avond mag niet leeg zijn.';
    }
}
    if (isset($_POST['middag'])){
    if ($middag == "") {
        $errors[] = 'middag mag niet leeg zijn.';
    }
}
echo $dagdeel;
if ( $dagdeel < 1){
    $errors[] = 'kies minstens een dagdeel' . $dagdeel;
}