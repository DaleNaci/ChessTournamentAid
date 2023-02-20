<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$tournament_code = $_SESSION["tournament-code"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="box">
            <button id="back-btn" class="btn btn-primary box__btn">Back</button>
            <h1 class="box__h1">Manage Players</h1>

            <form class="form--position-center" method="post" action="../middleware/players.php">
                <input class="form__input form-control" type="text" placeholder="Name" name="name-input">
                <input class="form__input form-control" type="text" placeholder="ELO" name="elo-input">

                <button class="btn btn-success" type="submit">Submit</button>

                <input type="hidden" name="player-added">
            </form>

            <table class="box__table">
                <tr>
                    <th class="box__row-item box__row-item_th box__table__col_small">Seed</th>
                    <th class="box__row-item box__row-item_th box__table__col_big">Name</th>
                    <th class="box__row-item box__row-item_th box__table__col_small">ELO</th>
                </tr>

                <?php
                    require_once("../middleware/players.php");

                    
                    $players = get_player_list($tournament_code, True, False, True);
                    $seed = 1;

                    foreach ($players as $player) {
                        echo "<tr>";

                        echo "<td class='box__row-item'>$seed</td>";
                        echo "<td class='box__row-item'>" . $player[1] . "</td>";
                        echo "<td class='box__row-item'>" . $player[0] . "</td>";

                        echo "</tr>";

                        $seed++;
                    }
                ?>
            </table>
        </div>

        <script type="text/javascript">
            document.getElementById("back-btn").onclick = function () {
                location.href = "home.php";
            }
        </script>
    </body>
</html>