<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
 <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
<fieldset>
<label>name</label>
<input type="text" name="name">

<label>email</label>
<input type="email" name="email">

<label>how much money do you have?</label>
<input type="number" name="amount">

<!-- radio button with additional attribute of "Value" -->
<label>choose your currency</label>

<ul>
<li><input type="radio" name="currency" value="0.017"> rubles</li>
<li><input type="radio" name="currency" value="0.76"> canadian dollars</li>
<li><input type="radio" name="currency" value="1.15"> pounds</li>
<li><input type="radio" name="currency" value="1.00"> euros</li>
<li><input type="radio" name="currency" value="0.0074"> yen</li>
</ul>
<input type="submit" value="convert it">

<p><a href="">reset!</a></p>


</fieldset>
</form>
 
 <?php
// server request method

// then check for any empty fields

// if fields are not empty, we will elseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'] &&
    $_POST['email'] &&
    $_POST['amount'] &&
    $_POST['currency'])) {
        echo '<p class="error">fill out all the fields</p>';

    } elseif (isset($_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $dollars = $amount * $currency;

        echo '
        <div class="box">
        <h2>hello '.$name.'</h2>
        <p>you now have <b> $'.floor($dollars).'</b> american dollars & we will be emailing you at '.$email.' with your information.</p>
        </div>';
    }
}




?>

</body>
</html>