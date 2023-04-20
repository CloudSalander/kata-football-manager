<?php
class Team {
	private string $name;
	private float $budget;
	private string $foundation_year; //TODO: Maybe use format Data?
	private ?array $players;
	private ?array $employees;
	private ?array $transactions;

	public function __construct(string $name, float $budget, string $foundation_year, $players = null, $employees = null) {
		$this->name = $name;
		$this->budget = $budget;
		$this->foundation_year = $foundation_year;
		$this->players = $players;
		$this->employees = $employees;
		$this->transactions = array();
	}

	public function buy(Player $player): Transaction | bool {

	}

	public function addTransaction(Transaction $transaction): void {
		$this->transactions[] = $transaction;
	}

	public function __toString(): string {
		return "Name:".$this->name.PHP_EOL;
		e"Founded in: ".$this->foundation_year.PHP_EOL;
		echo "Budget declared: ".$this->budget.PHP_EOL;

	}

}


?>