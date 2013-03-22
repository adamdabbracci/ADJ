<?php


$mysqli = new mysqli("localhost", "root", "", "adj");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$results = $mysqli->query("SELECT data FROM deck WHERE id=53");

$return = $results->fetch_row();

$deck = unserialize($return[0]);




//assign hands + board
$player1hand = array (
	"card1" => array($deck[1]["value"], $deck[1]["suit"]),
	"card2" => array($deck[2]["value"], $deck[2]["suit"]),
	"card3" => array($deck[13]["value"], $deck[13]["suit"]),
	"card4" => array($deck[14]["value"], $deck[14]["suit"]),
	"card5" => array($deck[15]["value"], $deck[15]["suit"]),
	"card6" => array($deck[16]["value"], $deck[16]["suit"]),
	"card7" => array($deck[17]["value"], $deck[17]["suit"]),
					  );
$player2hand = array (
	"card1" => array($deck[3]["value"], $deck[3]["suit"]),
	"card2" => array($deck[4]["value"], $deck[4]["suit"]),
	"card3" => array($deck[13]["value"], $deck[13]["suit"]),
	"card4" => array($deck[14]["value"], $deck[14]["suit"]),
	"card5" => array($deck[15]["value"], $deck[15]["suit"]),
	"card6" => array($deck[16]["value"], $deck[16]["suit"]),
	"card7" => array($deck[17]["value"], $deck[17]["suit"]),
					  );
$player3hand = array (
	"card1" => array($deck[5]["value"], $deck[5]["suit"]),
	"card2" => array($deck[6]["value"], $deck[6]["suit"]),
	"card3" => array($deck[13]["value"], $deck[13]["suit"]),
	"card4" => array($deck[14]["value"], $deck[14]["suit"]),
	"card5" => array($deck[15]["value"], $deck[15]["suit"]),
	"card6" => array($deck[16]["value"], $deck[16]["suit"]),
	"card7" => array($deck[17]["value"], $deck[17]["suit"]),
					  );
$player4hand = array (
	"card1" => array($deck[7]["value"], $deck[7]["suit"]),
	"card2" => array($deck[8]["value"], $deck[8]["suit"]),
	"card3" => array($deck[13]["value"], $deck[13]["suit"]),
	"card4" => array($deck[14]["value"], $deck[14]["suit"]),
	"card5" => array($deck[15]["value"], $deck[15]["suit"]),
	"card6" => array($deck[16]["value"], $deck[16]["suit"]),
	"card7" => array($deck[17]["value"], $deck[17]["suit"]),
					  );
$player5hand = array (
	"card1" => array($deck[9]["value"], $deck[9]["suit"]),
	"card2" => array($deck[10]["value"], $deck[10]["suit"]),
	"card3" => array($deck[13]["value"], $deck[13]["suit"]),
	"card4" => array($deck[14]["value"], $deck[14]["suit"]),
	"card5" => array($deck[15]["value"], $deck[15]["suit"]),
	"card6" => array($deck[16]["value"], $deck[16]["suit"]),
	"card7" => array($deck[17]["value"], $deck[17]["suit"]),
					  );
$player6hand = array (
	"card1" => array($deck[11]["value"], $deck[11]["suit"]),
	"card2" => array($deck[12]["value"], $deck[12]["suit"]),
	"card3" => array($deck[13]["value"], $deck[13]["suit"]),
	"card4" => array($deck[14]["value"], $deck[14]["suit"]),
	"card5" => array($deck[15]["value"], $deck[15]["suit"]),
	"card6" => array($deck[16]["value"], $deck[16]["suit"]),
	"card7" => array($deck[17]["value"], $deck[17]["suit"]),
					  );

//assign board
$board = array (
	"card1" => array($deck[13]["value"], $deck[13]["suit"]),
	"card2" => array($deck[14]["value"], $deck[14]["suit"]),
	"card3" => array($deck[15]["value"], $deck[15]["suit"]),
	"card4" => array($deck[16]["value"], $deck[16]["suit"]),
	"card5" => array($deck[17]["value"], $deck[17]["suit"]),

					  );


//respond to ajax from client
$playernum = $_GET['player'];

if ($playernum == '1'){
	echo '{
		"0" : {
					"value" : "' . $player1hand["card1"][0] . '",
					"suit" : "' . $player1hand["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $player1hand["card2"][0] . '",
					"suit" : "' . $player1hand["card2"][1] . '"
		}
	}';
};
if ($playernum == '2'){
	echo '{
		"0" : {
					"value" : "' . $player2hand["card1"][0] . '",
					"suit" : "' . $player2hand["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $player2hand["card2"][0] . '",
					"suit" : "' . $player2hand["card2"][1] . '"
		}
	}';
};
if ($playernum == '3'){
	echo '{
		"0" : {
					"value" : "' . $player3hand["card1"][0] . '",
					"suit" : "' . $player3hand["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $player3hand["card2"][0] . '",
					"suit" : "' . $player3hand["card2"][1] . '"
		}
	}';
};
if ($playernum == '4'){
	echo '{
		"0" : {
					"value" : "' . $player4hand["card1"][0] . '",
					"suit" : "' . $player4hand["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $player4hand["card2"][0] . '",
					"suit" : "' . $player4hand["card2"][1] . '"
		}
	}';
};
if ($playernum == '5'){
	echo '{
		"0" : {
					"value" : "' . $player5hand["card1"][0] . '",
					"suit" : "' . $player5hand["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $player5hand["card2"][0] . '",
					"suit" : "' . $player5hand["card2"][1] . '"
		}
	}';
};
if ($playernum == '6'){
	echo '{
		"0" : {
					"value" : "' . $player6hand["card1"][0] . '",
					"suit" : "' . $player6hand["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $player6hand["card2"][0] . '",
					"suit" : "' . $player6hand["card2"][1] . '"
		}
	}';
};

if ($playernum == 'board'){
	echo '{
		"0" : {
					"value" : "' . $board["card1"][0] . '",
					"suit" : "' . $board["card1"][1] . '"
		},
		"1" : {
					"value" : "' . $board["card2"][0] . '",
					"suit" : "' . $board["card2"][1] . '"
		},
		"2" : {
					"value" : "' . $board["card3"][0] . '",
					"suit" : "' . $board["card3"][1] . '"
		},
		"3" : {
					"value" : "' . $board["card4"][0] . '",
					"suit" : "' . $board["card4"][1] . '"
		},
		"4" : {
					"value" : "' . $board["card5"][0] . '",
					"suit" : "' . $board["card5"][1] . '"
		}
	}';
};


?>