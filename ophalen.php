<?php
require_once "./attributes/templates/dbcon.php";

$sql = "SELECT id, dagdeelm, dagdeelo, dagdeela, personen, dag, arragement, persoon_id FROM reservering";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . "<br>" . "personen: " . $row["personen"] . "<br>" . "datum: "  . $row["dag"] . "<br>"
        . "arragement: " . $row["arragement"] . "<br>" . "<br>";

        $personen = $row["personen"];
        $rvid = $row["id"];
        $psid = $row["persoon_id"];
        $totaalprijs = 00.00;
        // haal de koppel tabel aanvullen op
        $sql = "SELECT aanvulling_id FROM aanvulling_reservering WHERE reservering_id='$rvid'";
        $aanvulling = $db->query($sql);
        if ($aanvulling->num_rows > 0) {
            // output data of each row
            while($row = $aanvulling->fetch_assoc()) {
                echo "id aanvulling: " . $row["aanvulling_id"] . "<br>";

                $avid = $row["aanvulling_id"];
                
                $sql = "SELECT * FROM aanvulling WHERE id='$avid'";
                $okewerk = $db->query($sql);

                if ($okewerk->num_rows > 0) {
                    // output data of each row
                    while($row = $okewerk->fetch_assoc()) {
                        echo "id: " . $row["id"]. " - aanvulling: " . $row["aanvulling"]. " - prijs:" . $row["prijs"] . "<br>" . "<br>" . "<br>";
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
                echo "id: " . $row["id"]. " - Name: " . $row["naam"]. " " . $row["achternaam"]. "<br>" . "<br>" . "<br>";
                
            }
        } else {
            echo " geen persoon aan reservering gekoppeld";
        }
    }
} else {
    echo " geen reserveringen gevonden";
}