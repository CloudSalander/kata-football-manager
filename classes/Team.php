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

	public function addPlayer(Player $player): void {
		$this->players[] = $player; 
	}

	public function addEmployee(Employee $player): void {
		$this->employees[] = $player; 
	}
	
	public function __toString(): string {
		return "Name:".$this->name.PHP_EOL
		."Founded in: ".$this->foundation_year.PHP_EOL
		."Budget declared: ".$this->budget.PHP_EOL
		.$this->printPlayers()
		.$this->printEmployees();

	}
	//TODO: Maybe can we the following two actions with only one method?
	private function printPlayers(): string {
		$players_names = "Players are: ";
		foreach ($this->players as $key => $player) {
			$players_names .= $player->getName();
			if($key != count($this->players)) $players_names.=",";
		}
		return $players_names.PHP_EOL;
	}
	private function printEmployees(): string {
		$employees_names = "Employees are: ";
		foreach ($this->employees as $key => $employee) {
			$employees_names .= $employee->getName();
			if($key != count($this->employees)) $employees_names.=",";
		}
		return $employees_names.PHP_EOL;
	}
}


?>