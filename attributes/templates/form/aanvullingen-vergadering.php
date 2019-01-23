<section id="box2" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > Eten en drinken  </p>
                </section>
                <section class="information-box">

                <?php
                require_once "./attributes/templates/dbcon.php";            
                    $sql = "SELECT * FROM aanvulling WHERE groep='vergadering'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];
                            $idAanvulling = $row["id"];
                            ?>
                            <section class="prijs-tabel">
                            <p class="information-naam"> <input type="checkbox" name="arragamentPakketAanvulling[]" value="<?= $idAanvulling ?>"> <?= $aanvulling ?> </p> 
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen aanvullingen gevonden";
                    }
                ?>
                </section>
                <section class="information-box-title">
                    <p class="information-title" > Facilitair   </p>
                </section>
                <section class="information-box">

                <?php 
                    $sql = "SELECT * FROM aanvulling WHERE groep='Facilitair'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];
                            $idAanvulling = $row["id"];
                            ?>
                            <section class="prijs-tabel">
                            <p class="information-naam"> <input type="checkbox" name="arragamentPakketAanvulling[]" value="<?= $idAanvulling ?>"> <?= $aanvulling ?> </p>  
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen Facilitair aanvullingen gevonden";
                    }
                ?>
                </section>
        </section>