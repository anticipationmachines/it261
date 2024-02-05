<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 3</title>
    <!-- with drop down (select and option) -->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

            <label>Email</label>
            <input type="email" name="email"value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

            <label>How much money do you have?</label>
            <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">

            <!-- radio button with additional attribute of "Value" -->
            <label>Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked"' ;?>> Rubles</li>
                <li><input type="radio" name="currency" value="0.76"<?php if(isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked"' ;?>> Canadian Dollars</li>
                <li><input type="radio" name="currency" value="1.15"<?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked"' ;?>> Pounds</li>
                <li><input type="radio" name="currency" value="1.00"<?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"' ;?>> Euros</li>
                <li><input type="radio" name="currency" value="0.0074"<?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked"' ;?>> Yen</li>
            </ul>

            <label>Choose your banking institution</label>
            <select name="bank" id="bank">
                <option value="" <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"' ;?>>Select one...</option>
                <option value="bank of america" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'bank of america') echo 'selected = "selected"' ;?>>Bank of America</option>
                <option value="chase bank" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase bank') echo 'selected = "selected"' ;?>>Chase Bank</option>
                <option value="banner bank" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'banner bank') echo 'selected = "selected"' ;?>>Banner Bank</option>
                <option value="wells fargo" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'wells fargo') echo 'selected = "selected"' ;?>>Wells Fargo</option>
                <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = "selected"' ;?>>Boeing Employee Credit Union</option>
            </select>

            <input type="submit" value="Convert it">

            <p><a href="">Reset!</a></p>
        </fieldset>
    </form>

    <?php
    // Server request method

    // Then check for any empty fields
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = array(); // struggled with some of the logic not working so used an array to compile errors and ensure that the box echo only appears when ALL fields are filled // guess i sorta jumped the gun on this one

        if (empty($_POST['name'])) {
            $errors[] = 'Fill out your name';
        }

        if (empty($_POST['email'])) {
            $errors[] = 'Fill out your email';
        }

        if (empty($_POST['amount'])) {
            $errors[] = 'Fill out the amount';
        }

        if (empty($_POST['currency'])) {
            $errors[] = 'Check your desired currency';
        }

        if ($_POST['bank'] == NULL) {
            $errors[] = 'Choose your banking institution';
        }

        // If no errors on ALL, proceed with the calculations 
        // The way you did it seems a bit easier
        if (empty($errors) && isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $bank = $_POST['bank'];

            $dollars = @($amount * $currency);

            echo '
            <div class="box">
                <h2>Hello ' . $name . '</h2>
                <p>You now have <b>$'.number_format($dollars, 2). '</b> American dollars. We will be emailing you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>' . $bank . '</b></p>
            </div>';
        } else {
            // Display errors
            foreach ($errors as $error) {
                echo '<p class="error">' . $error . '</p>';
            }
        }
    }
    ?>
</body>
</html>
