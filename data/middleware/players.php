<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include("../backend/select_all_players.php");
    include("../backend/add_player.php");

    // Helper function
    function compare($a, $b) {
        return $b[0] - $a[0];
    }


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

            if ($elo) {
                array_push($arr, $row["Elo"]);
            }
            if ($name) {
                array_push($arr, $row["Name"]);
            }
            if ($tournament_code) {
                array_push($arr, $row["TournamentCode"]);
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

        usort($rtn, "compare");

        return $rtn;
    }

    if (isset($_POST["player-added"])) {
        $name_input = $_POST["name-input"];
        $elo_input = $_POST["elo-input"];

        add_player($name_input, $_SESSION["tournament-code"], intval($elo_input));

        header("Location: ../frontend/manage_players.php");
    }
?>