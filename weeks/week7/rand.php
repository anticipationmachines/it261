<?php
//our rand function

// playing with dice

$dice = rand(1,6);
echo '<p>'.$dice.'</p>';

//now with two dice

$dice1 = rand(1,6);
$dice2 = rand(1,6);

echo '<p>'.$dice1.' & '.$dice2.'</p>';

echo '<h2>w/ if else statements</h2>';
// if we throw a double - double 6, we win big!
//if we just throw a double, we still win
// no double, no win

$dice1a = rand(1,6);
$dice2a = rand(1,6);

if($dice1a == 6 && $dice1a == $dice2a) {
    echo'<b>Dice 1:</b>'.$dice1a.' <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>you ascended</h2>';

} else if($dice1a != 6 && $dice2a != 6 && $dice1a == $dice2a) {
    echo'<b>Dice 1:</b>'.$dice1a.' <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>you lived</h2>';

} else {
echo'<b>Dice 1:</b>'.$dice1a.' <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>you died</h2>';
}

echo '<h2>random photos</h2>';

$photos[1] = 'photo1';
$photos[2] = 'photo2';
$photos[3] = 'photo3';
$photos[4] = 'photo4';
$photos[5] = 'photo5';

$i = rand(1,5);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';


echo '<h2>creating a rand function</h2>';

function random_images($photos) {
$my_return = '';
$i = rand(1,5);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
return $my_return;

} //end function

echo random_images($photos);
