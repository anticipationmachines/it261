<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
</head>

<style> 
body {
    font-family: monospace;
    color: lime;
    background-color: black;
}
</style>
<body>

<?php
// date function and if statement
echo date('Y');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date('l, F j, Y h:i A');

echo '<br>';

$name = 'fritz';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// the logic behind this is, IF the time is less or equal to 11, it is morning.
// if the time is less or equal to 17, which equal to 5, then it is afternoon
// now we will have an else, that will mean it is evening

if ($our_time <= 11) {
    echo '<h2 style="color:yellow;">good morning '.$name.'</h2>
    <img src="/it261/images/roosters.png" alt="roosters">';
} elseif ($our_time <= 17) {
    echo '<h2 style="color:blue;">good afternoon '.$name.'</h2>
    <img src="/it261/images/sun.png" alt="sun">';
} else {
    echo '<h2 style="color:grey;">night...</h2>
    <img src="/it261/images/moon.png" alt="moon">';
}

?>

</body>
</html>
