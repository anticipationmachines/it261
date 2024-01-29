<?php
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

    // create another if statement if fields are empty, echo please fill out the fields
    if (empty($_POST['first_name']) ||
        empty($_POST['last_name']) ||
        empty($_POST['email']) ||
        empty($_POST['comments'])
    ) {
        echo 'Please fill out all of the fields';
    } else {
        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
        echo '<br>';
    } // end else
} else {
    echo '
    <form action= "" method="post">
        <label>First Name</label>
        <input type="text" name="first_name" id="firstname"

        <label>Last Name</label>
        <input type="text" name="last_name" id="lastname"
            
        <label>Email</label>
        <input type="email" name="email" id="email">
            
        <label>Comments</label>
        <textarea name="comments"></textarea>

        <input type="submit" value="Submit">
    </form>

    <p><a href="">RESET</a><p>
    ';
} // end isset