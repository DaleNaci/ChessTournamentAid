<?php
    require_once("sql_runner.php");


    function add_tournament_code($code, $name) {
        run_sql("
            INSERT INTO tournament
                 VALUES (
                         '$code',
                         '$name'
                        );
        ");
    }
?>