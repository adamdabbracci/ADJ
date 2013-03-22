<?php



$deck = array();


	for ($i = 1; $i <= 4; $i++) {
		for ($j = 1; $j <= 13; $j++) {
			$card = array(
				"value" => $j,
				"suit" => $i,
						  );
			
			array_push($deck, $card);
		};
	};
//shuffle the deck multiple times
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);
shuffle($deck);


/*debug - print the cards
for($i = 0; $i < count($deck); ++$i) {
    printf($deck[$i]['value'] . ' , ' . $deck[$i]['suit'] . '<br>');
}

*/

$superserial = serialize($deck);

print $superserial;


$mysqli = new mysqli("localhost", "root", "", "adj");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$results = $mysqli->query("INSERT INTO deck (data) VALUES ('" . $superserial . "')");

echo "done"

?>
