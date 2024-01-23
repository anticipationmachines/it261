<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php';
    $title = 'Home Page of our Website Project';
    $body = 'home';
    break;

    case 'about.php';
    $title = 'About Page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'Daily Page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php';
    $title = 'Project page of our Website Project';
    $body = 'home';
    break;

    case 'contact.php';
    $title = 'Contact Page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php';
    $title = 'Gallery Page of our Website Project';
    $body = 'gallery inner';
    break;
}
// our navigational array
$nav = array(
    'index.php' => 'home',
    'about.php' => 'about',
    'daily.php' => 'daily',
    'project.php' => 'project',
    'contact.php' => 'contact',
    'gallery.php' => 'gallery',
);


if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Sunday':
        $day = '<span style="color: #FFA07A;">The Legend of Zelda</span>';
        $details = '<p>"The Legend of Zelda" stands as the inaugural masterpiece in the iconic series, introducing players to an enchanting realm that would become the cornerstone of gaming history. Embark on a legendary quest as Link, the valiant hero, driven by an unwavering determination to rescue Princess Zelda and thwart the nefarious plans of the malevolent Ganon.</p>
        <p>This seminal adventure invites players to traverse the vast and diverse landscapes of Hyrule, each corner teeming with secrets, challenges, and the echoes of a rich mythology. Immerse yourself in the art of puzzle-solving within intricate dungeons, where each step forward unveils new mysteries and tests your mettle. The game\'s narrative unfolds like an epic saga, compelling players to gather the sacred pieces of the Triforce, the key to salvation for the beleaguered kingdom.</p>
        <p>Experience the genesis of a franchise that transcends generations, with "The Legend of Zelda" setting the stage for a legacy defined by heroic exploits, timeless puzzles, and the enduring bond between a hero and the land of Hyrule.</p>';
        $picture = 'legend.jpg';
        $alt = 'The Legend of Zelda';
        break;
    
    case 'Monday':
        $day = '<span style="color: #FFD700;">A Link to the Past</span>';
        $details = '<p>"A Link to the Past" beckons Link into an enthralling odyssey, seamlessly navigating between the ethereal Light World and the mysterious Dark World to thwart the sinister machinations of the malevolent wizard Agahnim. Embark on a quest that seamlessly blends heart-pounding action, expansive exploration, and mind-bending puzzles, solidifying its status as a cherished gem within the Zelda legacy.</p>
        <p>In this timeless adventure, Link\'s journey unfolds against a backdrop of mythical landscapes and cunning adversaries. Uncover the secrets of both worlds, solving intricate puzzles and confronting challenges that test your courage. The game\'s enduring appeal lies not only in its gameplay mechanics but also in the rich narrative that captivates players, inviting them to immerse themselves in a fantastical realm where the line between light and shadow blurs.</p>';
        $picture = 'link.jpg';
        $alt = 'A Link to the Past';
        break;

    case 'Tuesday':
        $day = '<span style="color: #98FB98;">Majora\'s Mask</span>';
        $details = '<p>"Majora\'s Mask" is a video game in the "Legend of Zelda" series, and it\'s a bit like going on a time-traveling adventure with Link, the hero. Imagine you\'re in a land called Termina, and there\'s this creepy moon threatening to crash down in just three days. So, you have to use your wits, solve puzzles, and wear magical masks to transform into different characters and save the day.</p>
        

        <p>The catch is, time keeps ticking, and you can play the same three days over and over, trying different things each time. It\'s like having a Groundhog Day experience in a fantastical world. Along the way, you meet quirky characters with their own stories, explore dungeons full of puzzles, and, of course, try to stop that ominous moon from causing chaos.</p>
        
        <p>It\'s a bit darker and more intense than your typical Zelda game, but it adds a unique twist to the usual hero\'s journey. Plus, there\'s this feeling of urgency with the impending moon crash, keeping you on your toes as you navigate through the adventure. So, think of "Majora\'s Mask" as a time-bending, mask-wearing, world-saving quest with Link at the helm.</p>';
        $picture = 'majoras.jpg';
        $alt = 'Majora\'s Mask';
        break;

    case 'Wednesday':
        $day = '<span style="color: #87CEEB;">Wind Waker</span>';
        $details = '<p>"The Legend of Zelda: The Wind Waker" embarks you on an epic journey with Link navigating the vast ocean to rescue his sister and confront the malevolent Ganon. Immerse yourself in the game\'s distinctive cel-shaded art style, renowned for its vibrant and expressive visuals. The adventure unfolds in a world where Hyrule is submerged beneath the waves, providing a unique and expansive seascape to explore.</p>

        <p>Set sail on the high seas, encountering challenges and uncovering secrets across islands. The captivating narrative follows Link\'s quest to thwart Ganon\'s plans while embracing the freedom of seafaring exploration. The Wind Waker introduces a captivating blend of whimsy and grandeur, offering a fresh perspective on the classic Zelda formula.</p>';
        $picture = 'wind_waker.jpg';
        $alt = 'Wind Waker';
        break;

    case 'Thursday':
        $day = '<span style="color: #FFB6C1;">Oracle of Ages/Seasons</span>';
        $details = '<p>"The Legend of Zelda: Oracle of Ages/Seasons" presents a unique dual adventure as Link ventures through the enchanting realms of Holodrum and Labrynna. These interconnected games weave a tale where the decisions made in one quest intricately shape the unfolding narrative of the other.</p>

        <p>Embark on a journey filled with time-honored puzzles, mythical challenges, and the exploration of two distinct lands. The intricate connection between Ages and Seasons adds a layer of complexity, inviting players to delve into the rich lore of the Zelda universe. As Link navigates the intertwining destinies of these parallel worlds, the consequences of choices echo across dimensions, creating a truly immersive and interconnected gaming experience.</p>';
        $picture = 'oracle.jpg';
        $alt = 'Oracle of Ages/Seasons';
        break;

    case 'Friday':
        $day = '<span style="color: #FF69B4;">Ocarina of Time</span>';
        $details = '<p>"The Legend of Zelda: Ocarina of Time" stands as a timeless classic, inviting players to join Link on an unforgettable journey. Traverse through the fabric of time, unravel dungeons, and master the enchanting melodies of the ocarina to thwart the nefarious plans of Ganondorf and safeguard the mystical land of Hyrule.</p>

        <p>Immerse yourself in a narrative that seamlessly weaves together exploration, puzzle-solving, and epic battles. As Link\'s quest unfolds, the Ocarina of Time becomes a powerful tool, allowing players to manipulate time and traverse between child and adult forms. The game\'s iconic moments and intricate gameplay mechanics have solidified its status as a legendary installment in the Zelda series, captivating players with its enduring charm and innovative design.</p>';
        $picture = 'ocarina.jpg';
        $alt = 'Ocarina of Time';
        break;

        case 'Saturday':
            $day = '<span style="color: #FF6347;">Twilight Princess</span>';
            $details = '<p>"The Legend of Zelda: Twilight Princess" immerses players in a gripping tale as Link undergoes a transformative journey, embracing the role of a wolf and navigating the delicate balance between the Twilight Realm and the familiar landscapes of Hyrule. As darkness threatens to engulf the kingdom, Link must muster the strength to thwart its advance and preserve the realm\'s light.</p>'
                . '<p>This installment introduces innovative gameplay mechanics that redefine the hero\'s capabilities, providing a fresh perspective on the iconic Zelda formula. The immersive narrative unfolds against a backdrop of a darker atmosphere, where the stakes are higher, and the challenges more formidable. The game\'s rich storytelling invites players to unravel the mysteries of the Twilight Realm and confront the malevolence that seeks to shroud Hyrule in shadows.</p>'
                . '<p>Embark on an epic quest that transcends the boundaries between worlds, as "Twilight Princess" weaves a captivating tapestry of heroism, sacrifice, and the enduring struggle against encroaching darkness. Brace yourself for a gripping adventure that pushes the boundaries of the Zelda legacy.</p>';
            $picture = 'twilight.jpg';
            $alt = 'Twilight Princess';
            break;
        
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="/it261/website/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ; ?>">

<header>
    <div class="inner-header">
<a href="index.php">
    <img id="logo" src="/it261/website/images/logo.png" alt="logo">
</a>

<!-- <nav>
<ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">Project</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>

</ul>

</nav> -->

<nav>
<ul>
<?php
 foreach($nav as $key => $value) {
if (THIS_PAGE == $key) {
    echo '<li> <a style="color:red;" href=" '.$key.'">'.$value.'</a></li>';
} else {
    echo '<li> <a style="color:green;" href=" '.$key.'">'.$value.'</a></li>';
}
} //end for each
?>
</ul>
</nav>

    </div>
    <!-- end inner-header -->
</header>