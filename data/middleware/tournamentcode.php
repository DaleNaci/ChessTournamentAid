<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once("../backend/get_tournament_row.php");


    if (isset($_POST["tournament-code-entered"])) {
        $code_input = $_POST["code-input"];
        $tournament_info = get_tournament_row($code_input);

        if (count($tournament_info) == 0) {
            header("Location: ../frontend/launch.php");
        } else {
            $_SESSION["tournament-code"] = $code_input;
            $_SESSION["tournament-name"] = $tournament_info[0]["TournamentName"];
            $_SESSION["tournament-status"] = "NOT STARTED";

            header("Location: ../frontend/home.php");
        }
    }
?>