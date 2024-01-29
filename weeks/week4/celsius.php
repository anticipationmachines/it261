<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<h1 class="math2">celsius converter</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <label>any celsius value</label>
        <input type="number" name="cel">
        <input type="submit" value="convert" class="submit">
        <p class="reset-container"><a class="reset" href="">reset</a></p>
    </fieldset>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cel'])) {
        $cel = $_POST['cel'];

        // Use intval() to make sure the value is an integer
        $cel_int = intval($cel);
        
        // Calculate Fahrenheit
        $far = ($cel_int * 9/5) + 32;

        // Check if Celsius value is not entered
        if ($cel == NULL) {
            echo '<p class="error">it\'s not working :(</p>';
        } elseif ($far <= 32) {
            echo '<p>' . $cel_int . '&deg;c equals ' . $far . '&deg;f<br> and it is pretty cold out there!</p>';
        } elseif ($far <= 45) {
            echo '<p>' . $cel_int . '&deg;c equals ' . $far . '&deg;f<br> and it is getting warmer!</p>';
        } elseif ($far <= 60) {
            echo '<p>' . $cel_int . '&deg;c equals ' . $far . '&deg;f<br> and it is sweater weather!</p>';

        } elseif ($far <= 75) {
            echo '<p>' . $cel_int . '&deg;c equals ' . $far . '&deg;f<br> and i\'m gone fishin\'</p>';
        } elseif ($far <= 90) {
            echo '<p>' . $cel_int . '&deg;c equals ' . $far . '&deg;f<br> and i\'m staying inside</p>';
        } else
            echo '<p>' . $cel_int . '&deg;c equals ' . $far . '&deg;f<br> and i\'m dead</p>';
        }
        
}
?>




</body>
</html>