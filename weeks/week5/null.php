<?php
echo '<h2>first example of "a", ergo, it is FALSE, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";

echo '<h2>second example of "b", echoing "1" - wut means? 1 equals TRUE</h2>';
$b = null;
echo "b is " . is_null($b) . "<br>";

echo '<h2>third example of "c", ergo, c IS NOT NULL</h2>';
$c = "null";
echo "c is " . is_null($c) . "<br>";

echo '<h2>fouth example of "d", therefore "d" is NULL</h2>';
$d = NULL; //no quotations ALL CAPS
echo "d is " . is_null($d) . "<br>";
?>