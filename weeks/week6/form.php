<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
<h1>form #1</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">

<fieldset>
<legend>
    Contact Fritz
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

<label>Email</label>
<input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

<label>gender_questions</label>
<ul>
<li><input type="radio" name="gender_questions" value="silly" <?php if(isset($_POST['gender_questions']) && $_POST['gender_questions'] == 'silly') echo 'checked= "checked"' ;?>> silly</li>

<li><input type="radio" name="gender_questions" value="fine i guess" <?php if(isset($_POST['gender_questions']) && $_POST['gender_questions'] == 'fine i guess') echo 'checked= "checked"' ;?>> fine i guess</li>

<li><input type="radio" name="gender_questions" value="annoying" <?php if(isset($_POST['gender_questions']) && $_POST['gender_questions'] == 'annoying') echo 'checked= "checked"' ;?>> annoying</li>
</ul>

<label>phone</label>
<input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone'])  ;?>">

<label>favorite zelda game</label>
<ul>
    <li>
        <input type="checkbox" name="fav_zelda_games[]" value="majora's mask" <?php if(isset($_POST['majora\'s mask']) && in_array('majora\'s mask', $fav_zelda_games)) echo 'checked = "checked"' ;?>> majora's mask
    </li>

    <li>
        <input type="checkbox" name="fav_zelda_games[]" value="ocarina of time" <?php if(isset($_POST['ocarina of time']) && in_array('ocarina of time', $fav_zelda_games)) echo 'checked = "checked"' ;?>> ocarina of time
    </li>

    <li>
        <input type="checkbox" name="fav_zelda_games[]" value="Oracle of ages/seasons" <?php if(isset($_POST['Oracle of ages/seasons']) && in_array('Oracle of ages/seasons', $fav_zelda_games)) echo 'checked = "checked"' ;?>> Oracle of ages/seasons
    </li>

    <li>
        <input type="checkbox" name="fav_zelda_games[]" value="Skyward Sword" <?php if(isset($_POST['skyward sword']) && in_array('skyward sword', $fav_zelda_games)) echo 'checked = "checked"' ;?>> Skyward Sword
    </li>

    <li>
        <input type="checkbox" name="fav_zelda_games[]" value="wind waker" <?php if(isset($_POST['wind waker']) && in_array('wind waker', $fav_zelda_games)) echo 'checked = "checked"' ;?>> Wind Waker
    </li>
</ul>

<label>regions</label>

<select name="regions">
    <option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"' ;?>>select one...</option>

    <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw" ) echo 'selected="selected"' ;?>>northwest</option>

    <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw" ) echo 'selected="selected"' ;?>>southwest</option>

    <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw" ) echo 'selected="selected"' ;?>>midwest</option>

    <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne" ) echo 'selected="selected"' ;?>>northeast</option>

    <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se" ) echo 'selected="selected"' ;?>>southeast</option>

</select>

    <label>complaints</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST[$comments]) ;?></textarea>

    <label>privacy</label>
    <ul><li>
    <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"' ;?>> i agree
    </li></ul>

    <input type="submit" value="send it">

    <p><a href="">reset</a></p>
</fieldset>
</form>
    
</body>
</html>