<?php
    require_once("sql_runner.php");


    function get_event_code($code) {
        return run_sql("
            SELECT *
              FROM eventcode
             WHERE code = '$code';
        ");
    }
?>