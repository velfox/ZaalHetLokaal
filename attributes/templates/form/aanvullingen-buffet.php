<section id="box2" class="activebox informatie-blok-container">
                <section class="information-box-title">
                    <p class="information-title" > vis   </p>
                </section>
                <section class="information-box">

                <?php
                require_once "./attributes/templates/dbcon.php";            
                    $sql = "SELECT * FROM aanvulling WHERE groep='vis'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];
                            $idAanvulling = $row["id"];
                            ?>
                            <section class="prijs-tabel">
                            <input type="checkbox" name="arragamentPakketAanvulling[]" value="<?= $idAanvulling ?>"> <p class="information-naam"> <?= $aanvulling ?> </p> <p class="information-prijs-tabel">  <?= $prijs ?>  </p>
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen vis aanvullingen gevonden";
                    }
                ?>
                </section>
                <section class="information-box-title">
                    <p class="information-title" > vlees   </p>
                </section>
                <section class="information-box">

                <?php 
                    $sql = "SELECT * FROM aanvulling WHERE groep='vlees'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];

                            ?>
                            <section class="prijs-tabel">
                                <p class="information-naam"> <?= $aanvulling ?> </p> <p class="information-prijs-tabel">  <?= $prijs ?>  </p>
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen vlees aanvullingen gevonden";
                    }
                ?>
                </section>
                <section class="information-box-title">
                    <p class="information-title" > groenten  </p>
                </section>
                <section class="information-box">

                <?php 
                    $sql = "SELECT * FROM aanvulling WHERE groep='groen'";
                    $visqr = $db->query($sql);

                    if ($visqr->num_rows > 0) {
                        // output data of each row
                        while($row = $visqr->fetch_assoc()) {
                            $aanvulling = $row["aanvulling"];
                            $prijs = $row["prijs"];

                            ?>
                            <section class="prijs-tabel">
                                <p class="information-naam"> <?= $aanvulling ?> </p> <p class="information-prijs-tabel">  <?= $prijs ?>  </p>
                            </section>
                            <?php

                        }
                    } else {
                        echo "geen vlees aanvullingen gevonden";
                    }
                ?>
                </section>
        </section>