<section id="box2" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > drinken  </p>
                </section>
                <section class="information-box">

                <?php
                require_once "./attributes/templates/dbcon.php";            
                    $sql = "SELECT * FROM aanvulling WHERE groep='drank'";
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
                    <p class="information-title" > eten </p>
                </section>
                <section class="information-box">

                    <?php 
                        $sql = "SELECT * FROM aanvulling WHERE groep='eten'";
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

                          <section class="information-box-title">
                    <p class="information-title" > bittergarnituur </p>
                </section>
                <section class="information-box">

                    <?php 
                        $sql = "SELECT * FROM aanvulling WHERE groep='bittergarnituur'";
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