<?php 
include('config.php');
include('./includes/header.php'); ?>

<body style="background-color:<?php echo ($today == 'Sunday') ? '#FFA07A' : (($today == 'Monday') ? '#FFD700' : (($today == 'Tuesday') ? '#98FB98' : (($today == 'Wednesday') ? '#87CEEB' : (($today == 'Thursday') ? '#FFB6C1' : (($today == 'Friday') ? '#FF69B4' : '#FF6347'))))); ?>">

    <div id="wrapper">

        <div id="hero">
        </div>
        <!-- end hero -->

        <main>

            <h2 class="<?php echo $actDay; ?>">
                <?php echo $day; ?></h2>
            <p><?php echo $details; ?></p>
            <h2>everyday is a zelda day...
            </h2>

            <ul>
                <li>
                    <a style="color:<?php echo ($today == 'Sunday') ? '#FFA07A' : '#FFF'; ?>" href="daily.php?today=Sunday">Sunday</a>
                </li>
                <li>
                    <a style="color:<?php echo ($today == 'Monday') ? '#FFD700' : '#FFF'; ?>" href="daily.php?today=Monday">Monday</a>
                </li>
                <li>
                    <a style="color:<?php echo ($today == 'Tuesday') ? '#98FB98' : '#FFF'; ?>" href="daily.php?today=Tuesday">Tuesday</a>
                </li>
                <li>
                    <a style="color:<?php echo ($today == 'Wednesday') ? '#87CEEB' : '#FFF'; ?>" href="daily.php?today=Wednesday">Wednesday</a>
                </li>
                <li>
                    <a style="color:<?php echo ($today == 'Thursday') ? '#FFB6C1' : '#FFF'; ?>" href="daily.php?today=Thursday">Thursday</a>
                </li>
                <li>
                    <a style="color:<?php echo ($today == 'Friday') ? '#FF69B4' : '#FFF'; ?>" href="daily.php?today=Friday">Friday</a>
                </li>
                <li>
                    <a style="color:<?php echo ($today == 'Saturday') ? '#FF6347' : '#FFF'; ?>" href="daily.php?today=Saturday">Saturday</a>
                </li>
            </ul>

        </main>

        <aside>
            <img src="./images/<?php echo $picture; ?>" alt="<?php echo $alt; ?>">
        </aside>

    </div>
    <!-- end wrapper -->

    <?php include('./includes/footer.php'); ?>
</body>
</html>
