<?php
include('classes/Team.php');
include('classes/Player.php');
include('classes/Employee.php');

//TODO: Builder class(es)

$player1 = new Player("Cloud",21,Position::KEEPER,10000.0);
$player2 = new Player("Barret",32,Position::FORWARD,6500.0);
$player3 = new Player("Tifa",27,Position::INNER,6500.0);
$player4 = new Player("Biggs",29,Position::DEFENSE,4500.0);
$player5 = new Player("Wedge",27,Position::DEFENSE,5500.0);
$employee1  = new Employee("Marlene",EmployeeType::PSYCOLOGIST,6);

$avalanche = new Team("Avalanche",200000.0,1937,[$player1,$player2,$player3,$player4,$player5]);	
$avalanche->addEmployee($employee1);

$player6 = new Player("Rufus",31,Position::FORWARD,10000.0);
$player7 = new Player("Scarlett",27,Position::INNER,10000.0);
$player8 = new Player("Heidegger",37,Position::DEFENSE,10000.0);
$player9 = new Player("Palmer",41,Position::KEEPER,10000.0);
$employee2 = new Employee("Hojo",EmployeeType::PHYSICAL_TRAINER,12,10000.0);

$shinra = new Team("Shinra SA",1000000000.0,1930,[$player6,$player7,$player8,$player9]);
$shinra->addEmployee($employee2);

echo $avalanche;
echo PHP_EOL;
echo $shinra;



?>