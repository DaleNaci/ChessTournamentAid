<?php
    require_once("sql_runner.php");


    function get_tournament_row($code) {
        return run_sql("
            SELECT *
              FROM tournament
             WHERE TournamentCode = '$code';
        ");
    }
?>