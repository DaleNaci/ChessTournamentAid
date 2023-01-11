<?php
    require_once("sql_runner.php");


    function add_event_code($code) {
        run_sql("
            INSERT INTO eventcode
                 VALUES (
                         '$code'
                        );
        ");
    }
?>