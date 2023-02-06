<?php
    require_once("sql_runner.php");


    function select_all_players($tournament_code) {
        return run_sql("
            SELECT *
              FROM player
             WHERE TournamentCode = '$tournament_code';
        ");
    }
?>