<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2</title>
    <!-- with drop down (select and option) -->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">

            <label>Email</label>
            <input type="email" name="email">

            <label>How much money do you have?</label>
            <input type="number" name="amount">

            <!-- radio button with additional attribute of "Value" -->
            <label>Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017"> Rubles</li>
                <li><input type="radio" name="currency" value="0.76"> Canadian Dollars</li>
                <li><input type="radio" name="currency" value="1.15"> Pounds</li>
                <li><input type="radio" name="currency" value="1.00"> Euros</li>
                <li><input type="radio" name="currency" value="0.0074"> Yen</li>
            </ul>

            <label>Choose your banking institution</label>
            <select name="bank" id="bank">
                <option value="" NULL>Select one...</option>
                <option value="bank of america">Bank of America</option>
                <option value="chase bank">Chase Bank</option>
                <option value="banner bank">Banner Bank</option>
                <option value="wells fargo">Wells Fargo</option>
                <option value="becu">Boeing Employee Credit Union</option>
            </select>

            <input type="submit" value="Convert it">

            <p><a href="">Reset!</a></p>
        </fieldset>
    </form>

    <?php
    // Server request method

    // Then check for any empty fields
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = array(); // struggled with some of the logic not working so used an array to compile errors and ensure that the box echo only appears when ALL fields are filled 

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

        // If no errors, proceed with the calculations
        if (empty($errors) && isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];

            $dollars = @($amount * $currency);

            echo '
            <div class="box">
                <h2>Hello ' . $name . '</h2>
                <p>You now have <b>$' . floor($dollars) . '</b> American dollars. We will be emailing you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>' . $bank . '</b></p>
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
