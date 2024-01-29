<?php
// First form
// $_GET global variable

// Our logic is: I will be asking for a name and email in my form
// If they are set, great
// If not, show me the form

if (isset($_GET['name'], $_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
} else {
    echo '
        <form action="" method="get">
            <label>Name</label>
            <input type="text" name="name" id="name"
            
            <label>Email</label>
            <input type="email" name="email" id="email">
            
            <input type="submit" value="Submit">
        </form>
    ';
}