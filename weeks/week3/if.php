<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>

<body>

<form id="temperatureForm" method="post" action="">
    <label for="temperature">Select Temperature:</label>
    <input type="range" id="temperature" name="temperature" min="0" max="100" step="1" value="<?= isset($_POST['temperature']) ? $_POST['temperature'] : 50 ?>" oninput="updateTemperature()">
    <input type="submit" value="Submit">
</form>

<?php

// Default temperature
$temp = isset($_POST['temperature']) ? (int)$_POST['temperature'] : 50;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    displayTemperature($temp);
}

function displayTemperature($temp) {
    echo '<p id="currentTemperature">Current Temperature: ' . $temp . '°F</p>';

    if ($temp <= 60) {
        echo 'bbBBbBBbrRRrrrRRrRrR';
        // Additional code for temperatures between 59 and 60
    } elseif ($temp <= 70) {
        echo 'It\'s getting warmer...';
        // Additional code for temperatures between 60 and 75
    } elseif ($temp <= 80) {
        echo 'Beach Day?';
        // Additional code for temperatures between 60 and 75
    } else {
        echo '<b>I\'M MELTIIIIING!!!!</b>';
        // Additional code for temperatures above 75
    }
}

echo '<h2>This exercise will be about a salary, a bonus and sales!</h2>';

// a salary of 95,000 - annual
// sales need to be above 100,000, you will start making bonus!
// 100,000 = 5%
// 120000 = 10%
// 140000 = 15%
// 150000 = 20%

$salary = 95000;
$sales = 199999;

// if sales is equal to or less than 99999, no bonus
// if sales is equal or less than 119999 5%
// if sales is equal or less than 139999 10%
// if sales is equal or less than 149999 15%

if ($sales <= 99999) {
    echo 'No bonus for you';
} elseif ($sales <= 119999) {
    $salary *= 1.05;
    echo 'Bonus: 5% - New Salary: $' . number_format($salary, 2) . ' dollars';
} elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo 'Bonus: 10% - New Salary: $' . number_format($salary, 2) . ' dollars';
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo 'Bonus: 15% - New Salary: $' . number_format($salary, 2) . ' dollars';
} else {
    $salary *= 1.20;
    echo '<b>Mega-Bonus:</b> 20% - New Salary: $' . number_format($salary, 2) . ' dollars';
}
    

?>

<script>
    function updateTemperature() {
        // Get the current temperature value from the slider
        var temperatureSlider = document.getElementById('temperature');
        var currentTemperatureDisplay = document.getElementById('currentTemperature');

        // Update the live display
        currentTemperatureDisplay.textContent = 'Current Temperature: ' + temperatureSlider.value + '°F';
    }
</script>

</body>
</html>
