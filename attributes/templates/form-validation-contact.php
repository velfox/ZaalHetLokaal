<?php
//Check if data is valid & generate error if not so
$errors = [];
if ($bericht == "") {
    $errors[] = 'Bericht mag niet leeg zijn.'; //Alternative for errors behind input and not in summary
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