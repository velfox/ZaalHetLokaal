<?php 
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'zaalhetlokaal';

//verbinding maken met de database
$db = mysqli_connect($host, $username, $password, $database) or die('error '. mysqli_connect_error()); 

