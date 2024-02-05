<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link rel="stylesheet" href="weeks/week5/css/styles.css" type="text/css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
            <?php if(isset($errors['name'])) echo '<p class="error">' . $errors['name'] . '</p>'; ?>

            <label>Total Miles</label>
            <input type="number" name="total_miles" value="<?php if(isset($_POST['total_miles'])) echo htmlspecialchars($_POST['total_miles']);?>">
            <?php if(isset($errors['total_miles'])) echo '<p class="error">' . $errors['total_miles'] . '</p>'; ?>

            <label>Average Speed (mph)</label>
            <input type="number" name="average_speed" value="<?php if(isset($_POST['average_speed'])) echo htmlspecialchars($_POST['average_speed']);?>">
            <?php if(isset($errors['average_speed'])) echo '<p class="error">' . $errors['average_speed'] . '</p>'; ?>

            <label>Time Driving per Day (hours)</label>
            <input type="number" name="time_per_day" value="<?php if(isset($_POST['time_per_day'])) echo htmlspecialchars($_POST['time_per_day']);?>">
            <?php if(isset($errors['time_per_day'])) echo '<p class="error">' . $errors['time_per_day'] . '</p>'; ?>

            <label>Price of Gas</label>
            <ul>
                <li><input type="radio" name="gas_price" value="3.00"<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 3.00) echo 'checked="checked"' ;?>> $3.00</li>
                <li><input type="radio" name="gas_price" value="3.50"<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 3.50) echo 'checked="checked"' ;?>> $3.50</li>
                <li><input type="radio" name="gas_price" value="4.00"<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 4.00) echo 'checked="checked"' ;?>> $4.00</li>
            </ul>
            <?php if(isset($errors['gas_price'])) echo '<p class="error">' . $errors['gas_price'] . '</p>'; ?>

            <label>Fuel Efficiency</label>
            <select name="fuel_efficiency" id="fuel_efficiency">
                <option value="" <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"' ;?>>Select one...</option>
                <option value="10" <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == 10) echo 'selected="selected"' ;?>>10 mpg</option>
                <option value="25" <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == 25) echo 'selected="selected"' ;?>>25 mpg</option>
                <option value="40" <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == 40) echo 'selected="selected"' ;?>>40 mpg</option>
            </select>
            <?php if(isset($errors['fuel_efficiency'])) echo '<p class="error">' . $errors['fuel_efficiency'] . '</p>'; ?>

            <input id="submit" type="submit" value="Calculate">

            <p><a href="">Reset!</a></p>
        </fieldset>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();

    if (empty($_POST['name'])) {
        $errors['name'] = 'Fill out your name';
    }

    if (empty($_POST['total_miles'])) {
        $errors['total_miles'] = 'Enter total miles';
    }

    if (empty($_POST['average_speed'])) {
        $errors['average_speed'] = 'Enter average speed';
    }

    if (empty($_POST['time_per_day'])) {
        $errors['time_per_day'] = 'Enter time driving per day';
    }

    if (empty($_POST['gas_price'])) {
        $errors['gas_price'] = 'Select the price of gas';
    }

    if (empty($_POST['fuel_efficiency'])) {
        $errors['fuel_efficiency'] = 'Select fuel efficiency';
    }

    if (empty($errors)) {
        // Perform calculations and display output
        $name = $_POST['name'];
        $total_miles = floatval($_POST['total_miles']);
        $average_speed = floatval($_POST['average_speed']);
        $time_per_day = floatval($_POST['time_per_day']);
        $gas_price = floatval($_POST['gas_price']);
        $fuel_efficiency = floatval($_POST['fuel_efficiency']);

        // Calculate time, days, gas used, and gas cost
        $total_time = $total_miles / $average_speed;
        $total_days = $total_time / $time_per_day;
        $gas_used = $total_miles / $fuel_efficiency;
        $gas_cost = $gas_used * $gas_price;

        // Display the result
        echo '
        <div class="box">
            <h2>Hello ' . $name . '</h2>
            <p>You will be traveling a total of <b>' . floor($total_time) . ' hours</b>, taking <b>' . floor($total_days) . ' days</b>, and using <b>' . round($gas_used) . ' gallons</b> of gas, costing you <b>$' . number_format($gas_cost, 2) . '</b></p>
        </div>';

    } else {
        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }
    }
}
?>

    <footer>
        <p>HTML Validation: <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Ffritzcodes.anticipationmachines.com%2Fit261%2Fcalculator.php" target="_blank">Validate HTML</a></p>
        <p>CSS Validation: <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Ffritzcodes.anticipationmachines.com%2Fit261%2Fcalculator.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">Validate CSS</a></p>
    </footer>
</body>
</html>
