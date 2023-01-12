<?php
    require_once("../backend/add_event_code.php");
    require_once("../backend/get_event_code.php");


    if (isset($_POST["event-code-entered"])) {
        $code_input = $_POST["code-input"];

        if (count(get_event_code($code_input)) == 0) {
            header("Location: ../frontend/launch.php");
        }
    }
?>