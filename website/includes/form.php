<form action="<?php echo htmlspecialchars(
        $_SERVER["PHP_SELF"]
    ); ?>" method="post">

        <fieldset>
            <!-- <legend>Contact Fritz</legend> -->
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if (
                isset($_POST["first_name"])
            ) {
                echo htmlspecialchars($_POST["first_name"]);
            } ?>">
            <span>
                <?php echo $first_name_err; ?>
            </span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (
                isset($_POST["last_name"])
            ) {
                echo htmlspecialchars($_POST["last_name"]);
            } ?>">
            <span>
                <?php echo $last_name_err; ?>
            </span>

            <label>Email</label>
            <input type="text" name="email" value="<?php if (
                isset($_POST["email"])
            ) {
                echo htmlspecialchars($_POST["email"]);
            } ?>">
            <span>
                <?php echo $email_err; ?>
            </span>

            <label>Triforce of...</label>
            <ul>
                <li><input type="radio" name="triforce" value="Wisdom" <?php if (
                    isset($_POST["triforce"]) &&
                    $_POST["triforce"] == "Wisdom"
                ) {
                    echo 'checked= "checked"';
                } ?>> Wisdom</li>
                <li><input type="radio" name="triforce" value="Strength" <?php if (
                    isset($_POST["triforce"]) &&
                    $_POST["triforce"] == "Strength"
                ) {
                    echo 'checked= "checked"';
                } ?>> Strength</li>
                <li><input type="radio" name="triforce" value="Courage" <?php if (
                    isset($_POST["triforce"]) &&
                    $_POST["triforce"] == "Courage"
                ) {
                    echo 'checked= "checked"';
                } ?>> Courage</li>
            </ul>
            <span>
                <?php echo $triforce_err; ?>
            </span>

            <label>Phone #</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (
                isset($_POST["phone"])
            ) {
                echo htmlspecialchars($_POST["phone"]);
            } ?>">

            <span>
                <?php echo $phone_err; ?>
            </span>

            <label>Favorite Games</label>
            <ul>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="majora's mask" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("majora's mask", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> Majora's Mask
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="ocarina of time" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("ocarina of time", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> Ocarina of Time
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="Oracle of ages/seasons" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array(
                            "Oracle of ages/seasons",
                            $_POST["fav_zelda_games"]
                        )
                    ) {
                        echo 'checked="checked"';
                    } ?>> Oracle of Ages & Seasons
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="Skyward Sword" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("Skyward Sword", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> Skyward Sword
                </li>
                <li>
                    <input type="checkbox" name="fav_zelda_games[]" value="wind waker" <?php if (
                        isset($_POST["fav_zelda_games"]) &&
                        in_array("wind waker", $_POST["fav_zelda_games"])
                    ) {
                        echo 'checked="checked"';
                    } ?>> Wind Waker
                </li>
            </ul>

            <span>
                <?php echo $fav_zelda_games_err; ?>
            </span>

            <label>Favorite Charecter</label>
            <select name="charecters">
                <option value="" <?php if (
                    isset($_POST["charecters"]) &&
                    is_null($_POST["charecters"])
                ) {
                    echo 'selected="unselected"';
                } ?>>Select one...</option>
                <option value="Link" <?php if (
                    isset($_POST["charecters"]) &&
                    $_POST["charecters"] == "Link"
                ) {
                    echo 'selected="selected"';
                } ?>>Link</option>
                <option value="Zelda" <?php if (
                    isset($_POST["charecters"]) &&
                    $_POST["charecters"] == "Zelda"
                ) {
                    echo 'selected="selected"';
                } ?>>Zelda</option>
                <option value="Tingle" <?php if (
                    isset($_POST["charecters"]) &&
                    $_POST["charecters"] == "Tingle"
                ) {
                    echo 'selected="selected"';
                } ?>>Tingle</option>
                <option value="Midna" <?php if (
                    isset($_POST["charecters"]) &&
                    $_POST["charecters"] == "Midna"
                ) {
                    echo 'selected="selected"';
                } ?>>Midna</option>
                <option value="Ganondord" <?php if (
                    isset($_POST["charecters"]) &&
                    $_POST["charecters"] == "Ganondord"
                ) {
                    echo 'selected="selected"';
                } ?>>Ganondorf</option>
            </select>
            <span>
                <?php echo $charecters_err; ?>
            </span>

            <label>This is where you write your love letter to Koji Kondo</label>
            <textarea name="comments"><?php if (isset($_POST["comments"])) {
                echo htmlspecialchars($_POST["comments"]);
            } ?></textarea>

            <span>
                <?php echo $comments_err; ?>
            </span>

            <label>It's dangerous to go alone!</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if (
                    isset($_POST["privacy"]) &&
                    $_POST["privacy"] == "yes"
                ) {
                    echo 'checked="checked"';
                } ?>> Take this.</li>
            </ul>
            <span>
                <?php echo $privacy_err; ?>
            </span>

            <input type="submit" value="Send it">

            <p><a class="reset" href="">Reset</a></p>
        </fieldset>
    </form>