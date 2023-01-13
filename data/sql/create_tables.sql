DROP TABLE chess_tournament_aid.matchassignment;
DROP TABLE chess_tournament_aid.player;
DROP TABLE chess_tournament_aid.match;
DROP TABLE chess_tournament_aid.tournament;


CREATE TABLE chess_tournament_aid.tournament (
    TournamentCode varchar(8),
    TournamentName varchar(128),
    PRIMARY KEY (TournamentCode)
);

CREATE TABLE chess_tournament_aid.player (
    Name varchar(64),
    TournamentCode varchar(8),
    Elo int(4),
    Points int(2),
    Wins int(2),
    Losses int(2),
    Ties int(2),
    PRIMARY KEY (Name),
    FOREIGN KEY (TournamentCode) REFERENCES chess_tournament_aid.tournament(TournamentCode)
);

CREATE TABLE chess_tournament_aid.match (
    MatchNum int(4),
    Results char(1),
    PRIMARY KEY (MatchNum)
);

CREATE TABLE chess_tournament_aid.matchassignment (
    MatchNum int(4),
    White varchar(64),
    Black varchar(64),
    PRIMARY KEY (MatchNum, White, Black),
    FOREIGN KEY (MatchNum) REFERENCES chess_tournament_aid.match(MatchNum),
    FOREIGN KEY (White) REFERENCES chess_tournament_aid.player(Name),
    FOREIGN KEY (Black) REFERENCES chess_tournament_aid.player(Name)
);