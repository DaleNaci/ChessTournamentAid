<?php
    require_once("sql_runner.php");


    function add_tournament_code($code, $tournament_name) {
        run_sql("
            INSERT INTO tournament
                 VALUES (
                         '$code',
                         '$tournament_name'
                        );
        ");
    }
?>