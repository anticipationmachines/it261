<?php
// celsius and farenheit

// far = ($celsius * 9/5) + 3;

// kilometer and mile

// mile = $kilometer / 1.60934;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my celcius table</title>

    <style>

        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            background-color:black;
            font-family:monospace;
            color:white;
        }

        table {
            width:500px;
            margin:20px auto;
            border-collapse:collapse;
            border:1px solid lime;
        }

        td {
            border:1px solid lime;
            border-collapse:collapse;
            padding:5px;
        }

        h1 {
            text-align: center;
            margin-top:15px;
        }

        #temp{
            margin-left:200px;
            position:absolute;
        }

        #dist{
            margin-left:700px;
            position:absolute;
        }
    </style>

</head>
<body>
<div id="temp">
    <h1>celsius / farenheit table</h1>
    <table>
        <tr>
            <th>celsius</th>
            <th>farenheit</th>
        </tr>
        <?php
        for($cel = 0; $cel <= 100; $cel += 3) {
            $far = intval(($cel * 9/5) + 32); // Use intval() to remove decimals without rounding
            echo '<tr>';
            echo '<td> '.$cel.' degrees</td>';
            echo '<td> '.$far.' degrees</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>

<div id="dist">
<h1>kilometer / mile table</h1>
    <table>
        <tr>
            <th>kilometer</th>
            <th>mile</th>
        </tr>
        <?php
        for($km = 0; $km <= 1000; $km += 50) {
            $mile = round($km / 1.60934); 
            echo '<tr>';
            echo '<td> '.$km.' km</td>';
            echo '<td> '.$mile.' miles</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>

</body>
</html>
