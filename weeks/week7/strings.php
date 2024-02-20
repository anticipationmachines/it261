<?php


$statement = 'Presently, I am reading the Looming Tower';
echo $statement;  
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 10);

echo '<h2> "I am reading" only... </h2>';
echo substr($statement, 10, 13);

echo '<h2> "Looming" only... </h2>';
echo substr($statement, -14, 8);
echo '<br>';
echo substr($statement, 4, 11);
echo '<br>';
echo substr($statement, -20, 2);
echo '<br>';
echo '<h2> "str_replace function </h2>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower';
echo str_replace('the','The', $statement2);