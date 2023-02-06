<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$tournamentName = $_SESSION["tournament-name"];
$tournamentStatus = $_SESSION["tournament-status"];

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

            <table class="box__table">
                <tr>
                    <th class="box__row-item box__row-item_th box__table__col_small">Seed</th>
                    <th class="box__row-item box__row-item_th box__table__col_big">Name</th>
                    <th class="box__row-item box__row-item_th box__table__col_small">ELO</th>
                </tr>
            </table>
        </div>

        <script type="text/javascript">
            document.getElementById("back-btn").onclick = function () {
                location.href = "home.php";
            }
        </script>
    </body>
</html>