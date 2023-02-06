<?php
    include("../backend/select_all_players.php");


    function get_player_list($current_tournament_code,
            $name=False,
            $tournament_code=False,
            $elo=False,
            $points=False,
            $wins=False,
            $losses=False,
            $ties=False
        ) {
        $rtn = array();

        $select_all_players = select_all_players($current_tournament_code);

        foreach ($select_all_players as $row) {
            $arr = array();

            if ($name) {
                array_push($arr, $row["Name"]);
            }
            if ($tournament_code) {
                array_push($arr, $row["TournamentCode"]);
            }
            if ($elo) {
                array_push($arr, $row["Elo"]);
            }
            if ($points) {
                array_push($arr, $row["Points"]);
            }
            if ($wins) {
                array_push($arr, $row["Wins"]);
            }
            if ($losses) {
                array_push($arr, $row["Losses"]);
            }
            if ($ties) {
                array_push($arr, $row["Ties"]);
            }

            array_push($rtn, $arr);
        }

        return $rtn;
    }
?>