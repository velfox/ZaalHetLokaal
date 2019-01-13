<?php
require_once "dbcon.php";

$sql = "SELECT * FROM reservering WHERE id=66";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Aantal personen: " . $row["personen"] . "<br>" . "Reservering datum: "  . $row["dag"] . "<br>"
        . "Arragement: " . $row["arragement"] . "<br>" . "<br>";

        $personen = $row["personen"];
        $rvid = $row["id"];
        $psid = $row["persoon_id"];
        $totaalprijs = 00.00;

        ?> <p> arragement inhoud </p> <?php

        // haal de koppel tabel aanvullen op
        $sql = "SELECT aanvulling_id FROM aanvulling_reservering WHERE reservering_id='$rvid'";
        $aanvulling = $db->query($sql);
        if ($aanvulling->num_rows > 0) {
            // output data of each row
            while($row = $aanvulling->fetch_assoc()) {
                $avid = $row["aanvulling_id"];
           
                $sql = "SELECT * FROM aanvulling WHERE id='$avid'";
                $okewerk = $db->query($sql);

                if ($okewerk->num_rows > 0) {
                    // output data of each row
                    while($row = $okewerk->fetch_assoc()) {
                        echo " - naam: " . $row["aanvulling"]. " - prijs: " . $row["prijs"] . "<br>" . "<br>";
                        $prijs = $row["prijs"];
                        $totaalprijs = $totaalprijs + $prijs;
                    }
                } else {
                    echo " geen persoon aan reservering gekoppeld";
                }
                
            }
        } else {
            echo " geen aanvulling aan reservering gekoppeld";
        }

        echo "totaalprijs perpersoon: " . $totaalprijs . "<br>" ;
        $cal= $totaalprijs * $personen;
        echo "totaalprijs (x ". $personen . " personen) " . $cal ."<br>" ."<br>";
        
        // haal de gekoppelde persoon op uit de database
        $sql = "SELECT * FROM persoon WHERE id='$psid'";
        $persoon = $db->query($sql);

        if ($persoon->num_rows > 0) {
            // output data of each row
            while($row = $persoon->fetch_assoc()) {
                echo " - Name: " . $row["naam"]. " " . $row["achternaam"]. "<br>" . "<br>" . "<br>";
                
            }
        } else {
            echo " geen persoon aan reservering gekoppeld";
        }
    }
} else {
    echo " geen reserveringen gevonden";
}