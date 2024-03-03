<?php
include('config.php');
include('./includes/header2.php');
?>

<h1>Zelda Characters <span class="selectedGame"></span></h1>

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
                <td class="characterName"><?php echo $name; ?></td>
                <td class="characterGame"><?php echo substr($game, 6, 200) ?></td>
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
