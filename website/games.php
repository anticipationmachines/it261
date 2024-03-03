<?php
include('config.php');
include('./includes/header.php');
?>

<main class="gameinfo">

    <?php

    $sql = 'SELECT * FROM games';

    // database connection
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(mysqli_error($iConn)) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    // row -> array
    // >0 = :) 
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <h2 style="color:#FFFFFF;">' . $row['game_name'] . '</h2>

            <ul>
                <li>is directed by <b style="' . $dailyStyle . ' display: inline;">' . $row['director'] . '</b></li>
                <li>and released in <b style="' . $dailyStyle . ' display: inline;">' . $row['release_date'] . '</b> on the <b style="' . $dailyStyle . ' display: inline;">' . $row['console'] . '</b></li>
            </ul>

            <p>For more information about <b style="' . $dailyStyle . ' display: inline;">' . $row['game_name'] . '</b>, click <a href="games-view.php?id=' . $row['game_id'] . '">here</a></p>
            ';
        }
    } else {
        echo 'Nobody Home!';
    }

    // release the server
    @mysqli_free_result($result);
    @mysqli_close($iConn);

    ?>

</main>
<!-- end wrapper -->

<?php
include('./includes/footer.php');
?>
