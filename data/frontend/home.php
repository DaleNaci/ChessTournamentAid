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

        <style>
        
        </style>
    </head>

    <body>

        <div class="box">
            <h1 class="box__h1"><?php echo $tournamentName; ?></h1>

            <button
                <?php
                    if ($tournamentStatus == "IN PROGRESS") {
                        echo "disabled";
                    } else {
                        echo "enabled";
                    }
                ?>
                class="btn btn-primary box__btn"
                id="manage-players-btn">
                Manage Players
            </button>

            <button
                <?php   
                    if ($tournamentStatus == "NOT STARTED") {
                        echo "disabled";
                    } else {
                        echo "enabled";
                    }
                ?>
                class="btn btn-primary box__btn"
                id="rankings-btn">
                Rankings
            </button>

            <button
                <?php
                    if ($tournamentStatus == "NOT STARTED") {
                        echo "disabled";
                    } else {
                        echo "enabled";
                    }
                ?>
                class="btn btn-primary box__btn"
                id="matches-btn">
                Matches
            </button>

            <button
                <?php
                    if ($tournamentStatus == "IN PROGRESS") {
                        echo "disabled";
                    } else {
                        echo "enabled";
                    }
                ?>
                class="btn btn-primary box__btn"
                id="start-tournament-btn">
                Start Tournament
            </button>
            
            <button
                <?php if ($tournamentStatus == "NOT STARTED") {
                    echo "disabled";
                } else {
                    echo "enabled";
                }
                ?>
                class="btn btn-danger box__btn"
                id="reset-tournament-btn">
                Reset Tournament
            </button>
        </div>
    </body>
</html>