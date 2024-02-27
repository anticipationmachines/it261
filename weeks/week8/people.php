<?php

include('config.php');
include('./includes/header.php');

?>

<main>

    <?php

    $sql = 'SELECT * FROM people';

    // database connection
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(mysqli_error($iConn)) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    // row -> array
    // >0 = :)
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <h2>Information about: '.$row['first_name'].' '.$row['last_name'].'</h2>

            <ul>
                <li>Email: '.$row['email'].'</li>
                <li>Birthdate: '.$row['birthdate'].'</li>
            </ul>

            <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a></p>
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

<aside>

</aside>

</div>
<!-- end wrapper -->

<?php

include('./includes/footer.php');

?>
