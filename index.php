<?php

namespace blackjack;

require('card.php');

// card faces array
	$suits = array(
	"Clubs","Diamonds", "Hearts", "Spades"
	);
// card values array
$values = array(
	"2", "3", "4", "5", "6", "7", 
	"8", "9", "10", "J", "K", "Q", "A"
	);

	$deck = array();
 
foreach ($suits as $suit) {
    foreach ($values as $value) {
        $deck[] = new card ($suit, $value);
    }
}

shuffle($deck);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="deck">
    <?php
    foreach($deck as $card){
        echo $card;
    }
    ?>
</div>
</body>
</html>