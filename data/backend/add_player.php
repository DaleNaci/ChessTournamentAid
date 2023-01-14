<?php
    require_once("sql_runner.php");


    function add_player($name, $tournament_code, $elo) {
        run_sql("
            INSERT INTO player
                 VALUES (
                         '$name',
                         '$tournament_code',
                         $elo,
                         0,
                         0,
                         0,
                         0
                        );
        ");
    }
?>