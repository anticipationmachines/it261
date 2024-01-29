<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<h1 class="math">arithmetic form</h1>
<form action="" method="post">
  <fieldset>
    <label>name</label>
    <input type="text" name="name">
    
    <label>phone</label>
    <input type="tel" name="phone">
    
    <label>how many lattes?</label>
    <input type="number" name="lattes">
    
    <label>how many cappuccinos?</label>
    <input type="number" name="cappuccinos">
    
    <label>how many americanos?</label>
    <input type="number" name="americanos">
    
    <label>special requests?</label>
    <textarea name="comments"></textarea>
    
    <input type="submit" value="send my order" class="submit">

    <p class="reset-container"><a class="reset" href="">reset</a></p>
  </fieldset>
</form>


<?php

date_default_timezone_set('America/Los_Angeles');
$our_time = date('H:i');

if (
    isset(
        $_POST['name'],
        $_POST['phone'],
        $_POST['lattes'],
        $_POST['cappuccinos'], // Fixed the name here
        $_POST['americanos'],
        $_POST['comments']
    )
) {
    // if statement for empty fields
    if (
        empty(
            $_POST['name'] &&
            $_POST['phone'] &&
            $_POST['lattes'] &&
            $_POST['cappuccinos'] && // Fixed the name here
            $_POST['americanos'] &&
            $_POST['comments']
        )
    ) {
        echo '<p class="error">Please fill out all of the fields</p>';
   
    } else {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $lattes = $_POST['lattes'];
        $cappuccinos = $_POST['cappuccinos']; // Fixed the name here
        $americanos = $_POST['americanos'];
        $comments = $_POST['comments'];
        $total = $lattes + $cappuccinos + $americanos; // Fixed the name here
    
        // if and elseif statement for current time
        if ($our_time <= 11) {
            $our_time = "buenos días";
        } elseif ($our_time <= 17) {
            $our_time = "buenas tardes";
        } else {
            $our_time = "buenas noches";
        }

        echo '
        <div class="box">
        <h2><span class="info">' . $our_time . '</span> <span class="info">' . $name . '</span></h2>
        <p>we have texted your order to this <b>number </b><span class="info">' . $phone . '</span> totaling <span class="info">' . $total . '</span> beverages:</p>
        <ul>
            <li><span class="info">' . $lattes . '</span></li> <li> lattes</li>
            <li><span class="info">' . $cappuccinos . '</span></li> <li> capuccinos</li>
            <li><span class="info">' . $americanos . '</span></li> <li> americanos</li>
        </ul>
        <p>we will ignore the following special request <b>request</b>: <span class="info">' . $comments . '</span></p>
        <p>please don\'t come back...</p>
    </div>';
        
    }
    
}

?>

</body>
</html>
