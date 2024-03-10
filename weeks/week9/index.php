<?php
// This is our index.php page, representing the home page of a website

session_start();
include('config.php');

// If the username has NOT been set, redirect to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

// If there is a logout request, destroy the session and redirect to the login page
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

include('./includes/header.php');?>
<header>
<?php
if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif;

if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
<h3>
Hello <?php echo $_SESSION['username'] ;?> 
</h3>
<a href="index.php?logout='1'">log out</a>
</div>
<!-- end welcome logout -->
<?php endif; ?>
</header>
<div id="wrapper">
<h1>welcome to the home page of our website</h1>

</div>
<!-- end wrapper -->
<?php include('./includes/footer.php');?>