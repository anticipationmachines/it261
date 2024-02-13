<?php
//our function page


function sayHello() {
    echo 'Hello PHP FUNCTION!!!';
}

sayHello();

echo'<h2>math problems - cube</h2>';

function cube($num) {
    $cubing = $num * $num * $num;
    echo $cubing;
}

cube('5');


echo'<h2>Area - width * height</h2>';

function area($w, $l) {
    $get_area = $w * $l;
    return $get_area;
}

$get_area = area(5, 12);
echo $get_area;


echo'<h2>Celcius Converter</h2>';

function celcius_converter($cel) {
    $far = ($cel * 9/5) + 32;
    echo $far;
}

celcius_converter('100');




echo'<h2>Indexed Arrays?</h2>';

function area_volume($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}

$my_array = area_volume(10, 5, 20);
echo '<b>This is my area:</b> '.$my_array[0].' <br>';
echo '<b>This is my volume:</b> '.$my_array[1].' <br>';


echo'<h2>List Function</h2>';

function area_volume2($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}

list($area, $volume) = area_volume2(5, 10, 30);
echo '<b>This is my area:</b> '.$area.' <br>';
echo '<b>This is my volume:</b> '.$volume.' <br>';


echo'<h2>Our Navigation</h2>';

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav = array(
    'index.php' => 'home',
    'about.php' => 'about',
    'daily.php' => 'daily',
    'project.php' => 'project',
    'contact.php' => 'contact',
    'gallery.php' => 'gallery',
);

function make_links($nav){
$myreturn = '';
foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
        $myreturn .= '<li> <a style="color:white; font-weight:bold;" href=" '.$key.'">'.$value.'</a></li>';
    } else { 
        $myreturn .= '<li> <a style="color:#98FB98;" href=" '.$key.'">'.$value.'</a></li>';

} // end for each

} //end function
return $myreturn;

}

echo'<h2>Our Nav Created w/ a Function</h2>';

echo make_links($nav);

echo'<h2>Implode Function</h2>';

$cars = array('toyota','ford','subaru','audi','bmw','mercedez', 'lexus') ;

$my_cars = implode(', ', $cars) ;

echo $my_cars;

echo'<h2>Wine Logic</h2>
<p>If post wines is not empty, take post wines and implode them, and create a new variable named $my_wines</p>';