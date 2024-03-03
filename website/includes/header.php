

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ; ?>" style="background-color:<?php echo ($today == 'Sunday') ? '#FFA07A' : (($today == 'Monday') ? '#FFD700' : (($today == 'Tuesday') ? '#98FB98' : (($today == 'Wednesday') ? '#87CEEB' : (($today == 'Thursday') ? '#FFB6C1' : (($today == 'Friday') ? '#FF69B4' : '#FF6347'))))); ?>">

<header>
    <div class="inner-header">
<a href="index.php">
    <img id="logo" src="/it261/website/images/sunset.gif" alt="logo">
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
echo make_links($nav);
?>
</ul>
</nav>

    </div>
    <!-- end inner-header -->
</header>