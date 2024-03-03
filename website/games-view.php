<?php

include('config.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: games.php');
}

$sql = 'SELECT * FROM games WHERE game_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(mysqli_error($iConn)) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $game_name = stripcslashes($row['game_name']);
        $director = stripcslashes($row['director']);
        $console = stripcslashes($row['console']);
        $release_date = stripcslashes($row['release_date']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    }
} else {
    $feedback = 'You\'ve met with a terrible fate, haven\'t you?';
}

include('./includes/header.php');

?>
<div class="centeredgameinfo">
<main class="gameinfo2">
    <div class="gameinfoleft">
        <h1 style="<?php echo $dailyStyle; ?>">
            <?php echo $game_name; ?>
        </h1>
        <h2>
            Released 
            <span style="<?php echo $dailyStyle; ?>; display: inline;">
                <?php echo $release_date;?>
            </span>
            on the
            <span style="<?php echo $dailyStyle; ?>; display: inline;">
                <?php echo $console;?>
            </span>
        </h2>

        <ul>
            <li>
                <b>Directed by </b>
                <span style="<?php echo $dailyStyle; ?>; display: inline;">
                    <?php echo $director; ?>
                </span>
            </li>
        </ul>
        <p><?php echo $details;?></p>
        <p>Return to our <a href="games.php">game page!</a></p>
    </div>

    <figure class ="gameinforight">
        <img src="./images/image<?php echo $id;?>.jpg" alt="<?php echo $game_name;?>">
    </figure>

</main>
</div>

<?php

include('./includes/footer.php');

// Close the database connection
mysqli_close($iConn);
?>
