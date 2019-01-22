<?php
//Check if data is valid & generate error if not so
$errors = [];
if ($datum == "") {
    $errors[] = 'Datum mag niet leeg zijn.'; //Alternative for errors behind input and not in summary
}
if ($personen == "") {
    $errors[] = 'Het aantal personen mag niet leeg zijn.';
}
if ($naam == "") {
    $errors[] = 'Naam mag niet leeg zijn.';
}
if ($achternaam == "") {
    $errors[] = 'Achternaam mag niet leeg zijn.';
}
if ($email == "") {
    $errors[] = 'Email mag niet leeg zijn.';
}
if ($tel == "") {
    $errors[] = 'Telefoonnummer mag niet leeg zijn.';
}
if ( $dagdeel < 1){
    $errors[] = 'Kies minstens een dagdeel.';
}
if ( $pakket == 0){
    $errors[] = 'Kies minstens een arragement.';
}
if ( $pakket == 0){
    $errors[] = 'Kies minstens een arragement.';
}

