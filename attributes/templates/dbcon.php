<?php 
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'zaalhetlokaal';

//stap 1 verbinding maken met de database
$db = mysqli_connect($host, $username, $password, $database) or die('error '. mysqli_connect_error()); //stap 2 test verbinding or die

// //stap 2: query opbouwen
// $query = 'SELECT * FROM reservering';
// // stap 3: qeury uitvoeren;
// $result = mysqli_query($db, $query) or die('Error '. mysqli_error($db). '<br> qeury:' .$query);
// // stap 4 resultaat wat een tabel is verwerken naar een array.
// $albums = [];

// while( $row = mysqli_fetch_assoc($result) ){
//   $reserveringen[] = $row;
// }
// // database connectie afsluiten
// mysqli_close($db);
