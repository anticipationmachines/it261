

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="/it261/website/css/styles.css" type="text/css" rel="stylesheet">

    <style>
    img {
        max-height: 400px;
        max-width: 100%;
        width: auto;
        margin-right: 100px;
    }

    #gallery {
        margin-left: 50px;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    h1 {
        margin-left: 50px;
        margin-top: 50px;
        margin-bottom: -40px !important;
        color: white !important;
        -webkit-text-stroke: 1px black;
        font-size: 36px;
    }

    table {
        border-collapse: separate;
        border-spacing: 0 100px;
        background-color: rgba(0, 0, 0, 0.2);
        padding-right: 100px;
        padding-left: 50px;
    }

    td {
        text-align: center !important;
        justify-content: center;
        padding: 10px 10px;
    }

    #name {
        text-transform: uppercase;
        letter-spacing: .1em;
        font-size: 160%;
        font-weight: bold;
        color: white;
        -webkit-text-stroke: 1px black;
    }

    .gameButton {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: block; 
        font-size: 16px;
        margin: 4px 0; 
        cursor: pointer;
        border-radius: 5px;
    }

    aside {
        position: fixed;
        right: 0px;
        margin-top: 0px;
        width: 187px;
        background-color: rgba(0, 0, 0, 0.2) !important;
        bottom: 100px;
    }

    button {
        width: 150px;
        height: 65px;
        margin-bottom: 5px !important;
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .selectedGame {
        font-size: 18px;
        color: rgba(0, 0, 0, 0.2) !important;
        -webkit-text-stroke: transparent !important;
        margin-top: 3px;
        margin-bottom: -5px !important;
        letter-spacing: .03em;
        word-spacing: .03em;
    }

    
</style>
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