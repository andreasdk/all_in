<?php

namespace blackjack;

class card 
{
	public $suit = null;
	public $value = null;


    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

	public function __toString()
	{
		$cardTop = '
			<div class="outline card1" data-value="'.$this->value.'">

			<div class="top"><span>'.$this->value.'</span><img src="img/'.$this->suit.'.png"></div>';
			$cardImage = '
		<img class="card-face" src="img/face-'.$this->value.'-'.$this->suit.'.png">';
			$cardBottom = '
		<div class="bottom"><span>'.$this->value.'</span><img src="img/'.$this->suit.'.png"></div>
		<div class="card-back">  </div>
	</div>
		';

		$cardSpacing = '<div class="spacing"></div>';

		if ($this->value == "J" or $this->value == "K" or $this->value == "Q"){
			return $cardTop.$cardImage.$cardBottom;
		} else {
			return $cardTop.$cardSpacing.$cardBottom;
		};
		
	}
}
	
?>