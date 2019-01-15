

<?php
session_start();

if (isset($_POST['submit'])) {
    require_once "./attributes/templates/dbcon.php";
    $wachtwoord = mysqli_escape_string($db, $_POST['wachtwoord']);
    $gebruikersnaam = mysqli_escape_string($db, $_POST['gebruikersnaam']);

    if ($gebruikersnaam == "") {
        $errors[] = 'gebruikersnaam mag niet leeg zijn.';
    }
    if ($wachtwoord == "") {
        $errors[] = 'wachtwoord mag niet leeg zijn.';
    }

    if (empty($errors)) {
        $sql = "SELECT * FROM adminor WHERE username='$gebruikersnaam'";
        $gebruikersnaam = $db->query($sql);

        if ($gebruikersnaam->num_rows > 0) {
            // output data of each row
            while($row = $gebruikersnaam->fetch_assoc()) {
                $password = $row["password"];
            }
            if (password_verify( $wachtwoord, $password)) {
                $_SESSION['user'] = $gebruikersnaam;
                $_SESSION['time_start_login'] = time();
                header('admin2.php');
            } else {
                $errors[] = 'wachtwoord gegevens klopppen niet.';
            }
        } else {
            $errors[] = 'gb naam gegevens klopppen niet.';
        }

    }
} 

if(isset($_SESSION['user'])){
    if (isset($_POST['submit'])) { 
        unset($_SESSION["user"]);
    }
?>
    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
    <input type="submit" name="loguit" value="loguit"/>
    </form>

  <?php
} else {
?>
 <?php if (isset($errors) && !empty($errors)) { ?>
    <ul class="errors">
        <?php for ($i = 0; $i < count($errors); $i++) { ?>
            <li><?= $errors[$i]; ?></li>
        <?php } ?>
    </ul>
<?php } ?>

 <section class="loginform">
    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
        <label for="uname"><b> gebruikersnaam </b></label>
        <input type="text" placeholder="Enter Username" name="gebruikersnaam" required>

        <label for="psw"><b> wachtwoord </b></label>
        <input type="password" placeholder="Enter Password" name="wachtwoord" required>

        <input type="submit" name="submit" value="Save"/>
    </div>
  </form>
 </section>

 <?php }?>
