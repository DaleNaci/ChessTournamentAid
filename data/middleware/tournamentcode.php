<?php
    require_once("../backend/get_tournament_code.php");


    if (isset($_POST["tournament-code-entered"])) {
        $code_input = $_POST["code-input"];

        if (count(get_tournament_code($code_input)) == 0) {
            header("Location: ../frontend/launch.html");
        }
    }
?>