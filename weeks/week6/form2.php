

<?php

ob_start(); 

//variables
$first_name = "";
$first_name_err = "";

$last_name = "";
$last_name_err = "";

$email = "";
$email_err = "";

$gender_questions = "";
$gender_questions_err = "";

$phone = "";
$phone_err = "";

$fav_zelda_games = "";
$fav_zelda_games_err = "";

$regions = "";
$regions_err = "";

$comments = "";
$comments_err = "";

$privacy = "";
$privacy_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Empty inputs = declaration of statement else we will assign the $_POST to a variable
    // $games $_POST ['games']

    if (empty($_POST["first_name"])) {
        $first_name_err = "Write your first name NOW....";
    } else {
        $first_name = $_POST["first_name"];
    }

    if (empty($_POST["last_name"])) {
        $last_name_err = "What was your last name again....";
    } else {
        $last_name = $_POST["last_name"];
    }

    if (empty($_POST["email"])) {
        $email_err = "emaiw pweez....";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["gender_questions"])) {
        $gender_questions_err =
            'i know these questions are weird but the form won\'t send unless you click a circle....';
    } else {
        $gender_questions = $_POST["gender_questions"];
    }

    if (empty($_POST["phone"])) {
        $phone_err = "srsly wuts ur #....";
    } else {
        $phone = $_POST["phone"];
    }

    if (empty($_POST["fav_zelda_games"])) {
        $fav_zelda_games_err =
            "Breath of the Wild is intentionally not on this list....";
    } else {
        $fav_zelda_games = $_POST["fav_zelda_games"];
    }

    if ($_POST['regions'] == NULL) {
        $regions_err = 'where u @....';
    } else {
        $regions = $_POST['regions'];
    }

    if (empty($_POST["comments"])) {
        $comments_err = "tell me something cool....";
    } else {
        $comments = $_POST["comments"];
    }

    if (empty($_POST["privacy"])) {
        $privacy_err = "shhhhhhhh....";
    } else {
        $privacy = $_POST["privacy"];
    }

    function fav_zelda_games($fav_zelda_games)
    {
        $my_return = "";
        if (!empty($_POST['fav_zelda_games'])) {
            $my_return = implode(",", $_POST['fav_zelda_games']);
        }
        return $my_return;
    } //end of function
    // Corrected the condition to check all fields 
    if (isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender_questions'],
    $_POST['phone'],
    $_POST['fav_zelda_games'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'])) {

        $to = "fritz.rodriguez@arts.cornish.edu";
        $subject = "test email on   " . date("m/d/y, h i A");
        $body =
            '
        First Name: ' .$first_name.' '.PHP_EOL.' 
        Last Name: ' .$last_name.' '.PHP_EOL.' 
        Email: ' .$email.' '.PHP_EOL.' 
        Thoughts: ' .$gender_questions.' '.PHP_EOL.' 
        Phone Number: ' .$phone.' '.PHP_EOL.' 
        Favorite Zelda games are: ' .$fav_zelda_games.' '.PHP_EOL.' 
        Region: ' .$regions.' '.PHP_EOL.' 
        Complaints: ' .$comments.' '.PHP_EOL.' 

        ';

        $headers = array(
            'From' => 'noreply@anticipationmachines.com'
            );

        // email ONLY when fields are filled out
        if (!empty($first_name && $last_name && $email && $gender_questions && $phone && $fav_zelda_games && $regions && $comments && $privacy))
        {

        mail($to, $subject, $body, $headers);
            header("Location: thnx.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <h1>Form #2</h1>
    <form action="<?php echo htmlspecialchars(
        $_SERVER["PHP_SELF"]
    ); ?>" method="post">

        <fieldset>
            <legend>Contact Fritz</legend>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if (
                isset($_POST["first_name"])
            ) {
                echo htmlspecialchars($_POST["first_name"]);
            } ?>">
            <span>
                <?php echo $first_name_err; ?>
            </span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (
                isset($_POST["last_name"])
            ) {
                echo htmlspecialchars($_POST["last_name"]);
            } ?>">
            <span>
                <?php echo $last_name_err; ?>
            </span>

            <label>Email</label>
            <input type="text" name="email" value="<?php if (
                isset($_POST["email"])
            ) {
                echo htmlspecialchars($_POST["email"]);
            } ?>">
            <span>
                <?php echo $email_err; ?>
            </span>

            <label>Gender Questions Are</label>
            <ul>
                <li><input type="radio" name="gender_questions" value="silly" <?php if (
                    isset($_POST["gender_questions"]) &&
                    $_POST["gender_questions"] == "silly"
                ) {
                    echo 'checked= "checked"';
                } ?>> silly</li>
                <li><input type="radio" name="gender_questions" value="fine i guess" <?php if (
                    isset($_POST["gender_questions"]) &&
                    $_POST["gender_questions"] == "fine i guess"
                ) {
                    echo 'checked= "checked"';
                } ?>> fine i guess</li>
                <li><input type="radio" name="gender_questions" value="annoying" <?php if (
                    isset($_POST["gender_questions"]) &&
                    $_POST["gender_questions"] == "annoying"
                ) {
                    echo 'checked= "checked"';
                } ?>> annoying</li>
            </ul>
            <span>
                <?php echo $gender_questions_err; ?>
            </span>

            <label>Phone</label>
            <input type="tel" name="phone" value="<?php if (
                isset($_POST["phone"])
            ) {
                echo htmlspecialchars($_POST["phone"]);
            } ?>">

            <span>
                <?php echo $phone_err; ?>
            </span>

            <label>Favorite Zelda Game</label>
            <ul>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="majora's mask" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("majora's mask", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> majora's mask
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="ocarina of time" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("ocarina of time", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> ocarina of time
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="Oracle of ages/seasons" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array(
                            "Oracle of ages/seasons",
                            $_POST["fav_zelda_games"]
                        )
                    ) {
                        echo 'checked="checked"';
                    } ?>> Oracle of ages/seasons
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="Skyward Sword" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("Skyward Sword", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> Skyward Sword
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="wind waker" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("wind waker", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> Wind Waker
                </li>
            </ul>

            <span>
                <?php echo $fav_zelda_games_err; ?>
            </span>

            <label>Regions</label>
            <select name="regions">
                <option value="" <?php if (
                    isset($_POST["regions"]) &&
                    is_null($_POST["regions"])
                ) {
                    echo 'selected="unselected"';
                } ?>>Select one...</option>
                <option value="nw" <?php if (
                    isset($_POST["regions"]) &&
                    $_POST["regions"] == "nw"
                ) {
                    echo 'selected="selected"';
                } ?>>Northwest</option>
                <option value="sw" <?php if (
                    isset($_POST["regions"]) &&
                    $_POST["regions"] == "sw"
                ) {
                    echo 'selected="selected"';
                } ?>>Southwest</option>
                <option value="mw" <?php if (
                    isset($_POST["regions"]) &&
                    $_POST["regions"] == "mw"
                ) {
                    echo 'selected="selected"';
                } ?>>Midwest</option>
                <option value="ne" <?php if (
                    isset($_POST["regions"]) &&
                    $_POST["regions"] == "ne"
                ) {
                    echo 'selected="selected"';
                } ?>>Northeast</option>
                <option value="se" <?php if (
                    isset($_POST["regions"]) &&
                    $_POST["regions"] == "se"
                ) {
                    echo 'selected="selected"';
                } ?>>Southeast</option>
            </select>
            <span>
                <?php echo $regions_err; ?>
            </span>

            <label>Complaints</label>
            <textarea name="comments"><?php if (isset($_POST["comments"])) {
                echo htmlspecialchars($_POST["comments"]);
            } ?></textarea>

            <span>
                <?php echo $comments_err; ?>
            </span>

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if (
                    isset($_POST["privacy"]) &&
                    $_POST["privacy"] == "yes"
                ) {
                    echo 'checked="checked"';
                } ?>> I agree</li>
            </ul>
            <span>
                <?php echo $privacy_err; ?>
            </span>

            <input type="submit" value="Send it">

            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

</body>

</html>