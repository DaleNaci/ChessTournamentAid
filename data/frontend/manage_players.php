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
            <button class="btn btn-primary box__btn">Back</button>
            <h1 class="box__h1">Manage Players</h1>
        </div>
    </body>
</html>