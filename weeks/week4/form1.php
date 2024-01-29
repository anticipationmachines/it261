<?php

if (isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo '<br>';
    echo $email;

} else {
    echo '
    <form action= "" method="post">
        <label>Name</label>
        <input type="text" name="name" id="name"
            
        <label>Email</label>
        <input type="email" name="email" id="email">
            
        <input type="submit" value="Submit">
    
    
    </form>
    ';
}