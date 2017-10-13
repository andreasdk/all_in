<?php 
// card faces array
$suits = array(
	"Clubs","Diamonds", "Hearts", "Spades"
	);
// card values array
$values = array(
	"Two", "Three", "Four", "Five", "Six", "Seven", 
	"Eight", "Nine", "Ten", "Jack", "King", "Queen", "Ace"
	);

$deck = array();
 
foreach ($suits as $suit) {
    foreach ($values as $value) {
        $deck[] = array ("value"=>$value, "suit"=>$suit);
    }
}

shuffle($deck);

$card = array_shift($deck);

echo $card['value'] . ' of ' . $card['suit'];