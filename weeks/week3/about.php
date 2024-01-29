<?php

echo '<h2>navigation</h2>';

$nav = array(
    'index.php' => 'home',
    'about.php' => 'about',
    'daily.php' => 'daily',
    'project.php' => 'project',
    'contact.php' => 'contact',
    'gallery.php' => 'gallery',
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li> <a href=" '.$key.'">'.$value.'</a></li>';
}
echo '</ul>';

echo '<h3>our navigation will display a different color when on the index.php page!</h3>';

// we are going to define a constant

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
 // we are adding an if statement- logically if we are on this page and it is the index.php page... DO SOMETHING
 echo '<ul>';
 foreach($nav as $key => $value) {
if (THIS_PAGE == $key) {
    echo '<li> <a style="color:red;" href=" '.$key.'">'.$value.'</a></li>';
} else {
    echo '<li> <a style="color:green;" href=" '.$key.'">'.$value.'</a></li>';
}

 } //end for each
 echo '</ul>';