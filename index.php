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


<div class="score" id="scr">
		score: 200$
	</div>

	<div class="house">

		House

	</div>


	<div class="player">

		Player

	</div>

	<div class="cards">

		<div id="deck">
    	<?php
   	 foreach($deck as $card){
        echo $card;
    	}
   	 	?>
    	</div>

	</div>


	<div class="buttons">
		<button class="button" id="btn1" >Start game</button>
		<button class="button" id="btn2">Hit</button>
		<button class="button" id="btn3">Stand</button>
		</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>




<script>
	var player = 0
	var house = 0
	


        $("#btn1").click(function(){
			var card = $('#deck .card1').last()
            card.detach().appendTo('.player')
			var value = card.data('value')
			if(value=='A'){
				player=player + 11
			}else if(value=='K'|value=='Q'|value=='J'){
				player = player + 10
				}else{
					player= value + player
				}		
			
		   console.log(player)
		   score()
		   
			var card = $('#deck .card1').last()
			card.detach().appendTo('.house')
			var value = card.data('value')
			if(value=='A'){
				house=house + 11
			}else if(value=='K'|value=='Q'|value=='J'){
				house = house + 10
				}else{
					house= value + house
				}		

			console.log(house)
			score()

			var card = $('#deck .card1').last()
			card.detach().appendTo('.player')
			var value = card.data('value')

			if(value=='A'){
				player=player + 11
			}else if(value=='K'|value=='Q'|value=='J'){
				player = player + 10
				}else{
					player= value + player
				}		
			console.log(player)
			score()

			var card = $('#deck .card1').last()
			card.detach().appendTo('.house')
			var value = card.data('value')
			if(value=='A'){
				house=house + 11
			}else if(value=='K'|value=='Q'|value=='J'){
				house = house + 10
				}else{
					house= value + house
				}		

			console.log(house)
			score()



        }); 

		$("#btn2").click(function(){
			var card = $('#deck .card1').last()
			var value = card.data('value')
			card.detach().appendTo('.player')

			if(value=='A'){
				player=player + 11
			}else if(value=='K'|value=='Q'|value=='J'){
				player = player + 10
				}else{
					player= value + player
				}		
			console.log(player)
			score()


			
        })
          
		$("#btn3").click(function(){
			var card = $('#deck .card1').last()
			var value = card.data('value')
			card.detach().appendTo('.house')
			if(value=='A'){
				house=house + 11
			}else if(value=='K'|value=='Q'|value=='J'){
				house = house + 10
				}else{
					house= value + house
				}		

			console.log(house)
			score()


			
        })

function score(){

	if (player > 21){
				alert('house wins!');
			}else if(house >21){
				alert('you win');
				}
				else if(player == 21){
					alert('you win!');
				}else if(house == 21){
					alert('house wins!');
				}
}
</script>


	
</body>
</html>