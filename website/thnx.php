<?php 
include('config.php');
include('./includes/header.php'); ?>

<body style="background-color:<?php echo ($today == 'Sunday') ? '#FFA07A' : (($today == 'Monday') ? '#FFD700' : (($today == 'Tuesday') ? '#98FB98' : (($today == 'Wednesday') ? '#87CEEB' : (($today == 'Thursday') ? '#FFB6C1' : (($today == 'Friday') ? '#FF69B4' : '#FF6347'))))); ?>">

<div class=thnx><H2>thnx</H2></div>

    <?php include('./includes/footer.php'); ?>
</body>
</html>
