<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM 3</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <h1>just a form</h1>
    <form action="" method="post">
        <fieldset>
            <label>first name</label>
            <input type="text" name="first_name">

            <label>last name</label>
            <input type="text" name="last_name">

            <label>email</label>
            <input type="email" name="email">

            <label>comments</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="submit" class="submit">
            <p class="reset-container"><a href="" class="reset">reset</a></p>
        </fieldset>
    </form>

    <?php
    // Logic - if isset is complete awesome
    // if empty fields echo "fill the fields out dawg"
    // if the fields are not empty then else echos the info

    if (
        isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['comments'])
    ) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        // nest another if statement for empty fields
        if (
            empty($_POST['first_name']) ||
            empty($_POST['last_name']) ||
            empty($_POST['email']) ||
            empty($_POST['comments'])
        ) {
            echo '<p class="error">fill in all the fields<p>';
        } else {
            echo '
<div class="box">
    <h2>hello <span class="info">' . $first_name . ' ' . $last_name . '</span></h2>
    <p>we have received your <b>email</b> as <b class="info">' . $email . '</b> and will review your <b>comment: </b><b class="info">' . $comments . '</b></p>
</div>';
            
        } // end empty
    } // end isset
    ?>
</body>
</html>
