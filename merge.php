<?php 
// card faces array
	$suits = array(
	"Clubs","Diamonds", "Hearts", "Spades"
	);
// card values array
$values = array(
	"2", "3", "4", "5", "6", "7", 
	"8", "9", "10", "J", "K", "Q", "A"
	);
// return the HTML code for that card
class card 
{
	public $suit = null;
	public $value = null;

	public function __toString()
	{
		return '
			<div class="outline">
			<div class="top"><span>' .$this->value. '</span><img src="img/'.$this->suit.'.png"></div>
		<img class="card-face" src="img/face-queen-heart.png">
		<div class="bottom"><span>Q</span><img src="img/' .$this->suit.'.png"></div>
	</div>';
	}
}


$newCard = new card();
$newCard -> suit = 'spades';
$newCard -> value = 'Jack';
echo $newCard;


$deck = array();

foreach ($suits as $suit) {
   foreach ($values as $value) {
       $deck[] = array ("value"=>$value, "suit"=>$suit);
   }
}

shuffle($deck);

$card = array_shift($deck);

echo $card['value'] . ' of ' . $card['suit'];

foreach ($deck as $element) {
	foreach ($element as $innerElement){
		echo "$innerElement\n of ";
	}

}


	
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
	<div class="outline">
		<div class="top"><span>Q</span><img src="img/hearts.png"></div>
		<img class="card-face" src="img/face-queen-heart.png">
		<div class="bottom"><span>Q</span><img src="img/hearts.png"></div>
	</div>
</body>
</html>