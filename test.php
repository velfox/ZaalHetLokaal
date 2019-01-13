<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */
$password = "kamerik";
$passwordhas = password_hash($password, PASSWORD_DEFAULT);
echo $passwordhas;
/**
 * In this case, we want to increase the default cost for BCRYPT to 12.
 * Note that we also switched to BCRYPT, which will always be 60 characters.
 */
?>
<br>
<?php
session_start();
// See the password_hash() example to see where this came from.
$hash = $passwordhas;

if (password_verify('kamerik', $hash)) {
    echo 'Password is valid!';
    $_SESSION['user'] = 'tim';
    $_SESSION['time_start_login'] = time();
    echo 'login';
} else {
    echo 'Invalid password.';
}
?>

<?php


if(isset($_SESSION['user'])){
    echo 'ingelocht.';
} else {
 echo 'niet ingelocht';
}
 ?>

 $qeury = "SELECT password , name FROM users",


</body>
</html>