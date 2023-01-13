<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once("../backend/get_tournament_code.php");


    if (isset($_POST["tournament-code-entered"])) {
        $code_input = $_POST["code-input"];

        if (count(get_tournament_code($code_input)) == 0) {
            header("Location: ../frontend/launch.php");
        } else {
            $_SESSION["tournament-code"] = $code_input;

            header("Location: ../frontend/home.php");
        }
    }
?>