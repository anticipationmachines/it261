<?php

session_start();
include('config.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])) {

$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
$password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

// if empty - array_push();

if(empty($first_name)) {
    array_push($errors, 'first name is required');
}

if(empty($last_name)) {
    array_push($errors, 'last name is required');
}

if(empty($email)) {
    array_push($errors, 'email is required');
}

if(empty($username)) {
    array_push($errors, 'username is required');
}

if(empty($password1)) {
    array_push($errors, 'password is required');
}

// does password1 == password2

if($password1 !== $password2) {
    array_push($errors, 'passwords do not match');
}

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we can only have 1 unique email or username per database

if($rows) {

    if($rows['username'] == $username) {
        array_push($errors, 'username already exists');
    }

    if($rows['email'] == $email) {
        array_push($errors, 'email already exists');
    }

} // end unique if statement

if((int)$errors == 0) {
    $password = md5($password1);

    // logically - we must insert information into the database

    $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

    mysqli_query($iConn, $query);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;

    header('Location:login.php');


} // end if errors



} //closed if isset reg_user

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)){
        array_push($errors, 'username is required');
    }
    
    if(empty($password)){
        array_push($errors, 'password is required');
    }

if(count($errors) == 0){

$password = md5($password);

// query users table to make sure username and password match

$query ="SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$results = mysqli_query($iConn, $query);

if(mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

// if the above is succesful we will be directed to the index.php

header('Location:index.php');

} else {

    array_push($errors, 'wrong username/password combo...');
}

} // end count errors

} // close if isser login_user
