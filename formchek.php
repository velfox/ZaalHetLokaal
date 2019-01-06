<?php
// define variables and set to empty values
$nameErr = $personenErr = $naamErr = $achternaamErr ="";
$datum =""; $personen ="";  $achternaam =""; $naam ="";
$middag = 0; $avond = 0; $ochtend = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  if (empty($_POST["tracefield"])) {
    $nameErr = "datum is required";
    header('Location: reserveren.php?option='. $tracefield);
  } else {
    $tracefield = test_input($_POST["tracefield"]);
    if (empty($_POST["datum"])) {
      $nameErr = "datum is required";
      header('Location: reserveren.php?option='. $tracefield);
    } else {
      $datum = test_input($_POST["datum"]);
    }

    if (empty($_POST["personen"])) {
      $personenErr = "personen is required";
      header('Location: reserveren.php?option='. $tracefield);
    } else {
      $personen = test_input($_POST["personen"]);
    }
    if (empty($_POST["naam"])) {
      $nameErr = "datum is required";
      header('Location: reserveren.php?option='. $tracefield);
    } else {
      $naam = test_input($_POST["naam"]);
    }

    if (empty($_POST["achternaam"])) {
      $achternaamErr = "personen is required";
      header('Location: reserveren.php?option='. $tracefield);
    } else {
      $achternaam = test_input($_POST["achternaam"]);
    }

    if (empty($_POST["ochtend"])) {
      $achternaamErr = "ochtend is required";
    } else {
      $ochtend = test_input($_POST["ochtend"]);
      if ($ochtend == true){
        $ochtend = 1;
      } else {
        $ochtend = 0;
      }
    }

    if (empty($_POST["middag"])) {
      $achternaamErr = "ochtend is required";
    } else {
      $middag = test_input($_POST["middag"]);
      if ($middag == true){
        $middag = 1;
      } else {
        $middag = 0;
      }
    }

    if (empty($_POST["avond"])) {
      $achternaamErr = "avond is required";
    } else {
      $avond = test_input($_POST["avond"]);
      if ($avond == true){
        $avond = 1;
      } else {
        $avond = 0;
      }
    }

        //chek of er 1 of meer dagdelen zijn gekozen
    $dagdeeltotaal = $middag + $avond + $ochtend;
    if($dagdeeltotaal < 1){
      header('Location: reserveren.php?option='. $tracefield);
    }


  }
}


if ( $tracefield == "buffet"){
include_once('./attributes/templates/dbcon.php');
  $sql = "INSERT INTO reservering (dag, personen, timtak, achternaam, dagdeelo, dagdeela, dagdeelm)
  VALUES ('$datum', $personen, '$naam', '$achternaam', $ochtend, $avond, $middag);";
  if ($db->query($sql) === TRUE) {
      echo "New record created successfully";
      echo "$datum, $personen";
  } else {
      echo "Error: " . $sql . "<br>" . $db->error;
      echo "$datum, $personen";
  }
  $db->close();
}

echo "je tracfied id klopt niet " . $tracefield ." uhm oeps!?";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}