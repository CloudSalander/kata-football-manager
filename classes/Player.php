<?php 
	class Player extends Person {
		private int $edad;
		private Position $position;
		private float $market_value;

		public function __construct(string $name, int $edad, Position $position, float $market_value) {
			parent::__construct($name);
			$this->edad = $edad;
			$this->Position = $position;
			$this->market_value = $market_value;
		}

		public getMarketValue(): float {
			return $this->market_value;
		} 
	}
?>