<?php 
include('config.php');
include('./includes/header.php'); ?>

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
        float: right; 
        margin-top: 50px;
        width: 187px;
        background-color: rgba(0, 0, 0, 0.2) !important;
        margin-bottom: 50px;
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

<body style="background-color:<?php echo ($today == 'Sunday') ? '#FFA07A' : (($today == 'Monday') ? '#FFD700' : (($today == 'Tuesday') ? '#98FB98' : (($today == 'Wednesday') ? '#87CEEB' : (($today == 'Thursday') ? '#FFB6C1' : (($today == 'Friday') ? '#FF69B4' : '#FF6347'))))); ?>">

<h1>Zelda Charecters <span class="selectedGame"></span></h1>

    <div id="gallery">

        <aside>
            <div id="gameButtons">
                <?php
                $games = array_unique(array_map(function ($game) {
                    return substr($game, 6, 34);
                }, $characters));

                foreach ($games as $game) {
                    echo "<button class='gameButton' data-game='$game'>$game</button>";
                }
                ?>
            </div>

            <!-- Reset button -->
            <button id="resetButton">Reset</button>
        </aside>

        <table>
            <?php foreach ($characters as $name => $game): ?>
                <tr class="characterRow" data-game="<?php echo substr($game, 6, 34); ?>">
                    <td><img src="images/<?php echo substr($game, 0, 5); ?>.png" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                    <td id="name"><?php echo $name; ?></td>
                    <td id="game"><?php echo substr($game, 6, 34) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script>
        // Click handler for game buttons
        document.getElementById("gameButtons").addEventListener("click", function (event) {
            if (event.target.classList.contains("gameButton")) {
                let selectedGame = event.target.dataset.game;

                // Hide all rows
                document.querySelectorAll(".characterRow").forEach(function (row) {
                    row.style.display = "none";
                });

                // Show only rows matching selected 'game'
                document.querySelectorAll(`.characterRow[data-game="${selectedGame}"]`).forEach(function (row) {
                    row.style.display = "";
                });

                // Update h1 dynamically
                document.querySelector(".selectedGame").textContent = "from " + selectedGame;
            }
        });

        // Click handler for reset button
        document.getElementById("resetButton").addEventListener("click", function () {
            // Show all rows
            document.querySelectorAll(".characterRow").forEach(function (row) {
                row.style.display = "";
            });

            // Reset h1 text
            document.querySelector(".selectedGame").textContent = "";
        });
    </script>

    <?php include('./includes/footer.php'); ?>
</body>
</html>
