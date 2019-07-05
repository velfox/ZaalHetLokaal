<?php
session_start();
define('SITE_KEY', '6LcwLKsUAAAAANZ1p7fRoV1cvFe55dPwr9ccgRmf');
define('SERVER_KEY', '6LcwLKsUAAAAABdMBtGLU1JSjMbaMuB3lrms0J2W');

if (isset($_POST['submit'])) {
    if (isset($_POST['g-recaptcha-response'])) {
        function getCaptcha($secretKey)
        {
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . SERVER_KEY . "&response={$secretKey}");
            $return = json_decode($response, true);
            return $return;
        }

        $return = getCaptcha($_POST['g-recaptcha-response']);
    }
    require_once "./attributes/templates/dbcon.php";
    $wachtwoordUser = mysqli_escape_string($db, $_POST['wachtwoord']);
    $gebruikersnaamUser = mysqli_escape_string($db, $_POST['gebruikersnaam']);

    if ($gebruikersnaamUser == "") {
        $errors[] = 'gebruikersnaam mag niet leeg zijn.';
    }
    if ($wachtwoordUser == "") {
        $errors[] = 'wachtwoord mag niet leeg zijn.';
    }

    if (empty($errors)) {
        $sql = "SELECT * FROM adminor WHERE username='$gebruikersnaamUser'";
        $gebruikersnaam = $db->query($sql);

        if ($gebruikersnaam->num_rows > 0) {
            // output data of each row
            while ($row = $gebruikersnaam->fetch_assoc()) {
                $password = $row["password"];
            }
            if (password_verify($wachtwoordUser, $password)) {
                $_SESSION['user'] = $gebruikersnaamUser;
                $_SESSION['time_start_login'] = time();
            } else {
                $errors[] = 'wachtwoord gegevens klopppen niet.';
            }
        } else {
            $errors[] = 'gb naam gegevens klopppen niet.';
        }
    } else {
        $errors[] = 'Recaptcha Fout. Probeer het later opnieuw.';
        if ($return['error-codes'][0] == "timeout-or-duplicate") {
            $errors[] = 'Het formulier is al verzonden.';
        }
    }
}

if (isset($_SESSION['user'])) {
    header("location: dashboard.php");

    ?>
    <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
        <input type="submit" name="loguit" value="loguit" />
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
    <script src="https://www.google.com/recaptcha/api.js?render=6LcwLKsUAAAAANZ1p7fRoV1cvFe55dPwr9ccgRmf"></script>
    <section class="loginform">
        <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
            <label for="uname"><b> gebruikersnaam </b></label>
            <input type="text" placeholder="Enter Username" name="gebruikersnaam" required>
            <label for="psw"><b> wachtwoord </b></label>
            <input type="password" placeholder="Enter Password" name="wachtwoord" required>
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            <input type="submit" name="submit" value="login" />
            </div>
        </form>
    </section>
    <script src="./attributes/scripts/admin.js"></script>
<?php } ?>