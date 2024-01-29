<?php
// array of wines
echo '<h2>the wine list</h2>';

$wines = array(
    'cabernet',
    'merlot',
    'syrah',
    'malbec',
    'red blend',
);

// using a foreach loop to display the wine list
echo '<ul>';
foreach($wines as $key) {
    echo '<li> '.$key.'</li>'; 
}
echo '</ul>';

echo '<h2>movies & shows w/ key & value</h2>';

$shows = [
    'disney+' => ['andor'],
    'apple tv' => ['severance'],
    'crunchyroll' => ['attack on titan', 'spy family'], // nested array
    'netflix' => ['casa de papel'],
    'hbo max' => ['true detective']
];

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li> <b>'.$key.'</b> - '.implode(', ', $value).'</li>';
}
echo '</ul>';

echo '<h2>navigation w/ key & value</h2>';

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
?>
