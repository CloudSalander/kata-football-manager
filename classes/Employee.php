<?php 
	class Employee extends Person {
		private EmployeeType $role;
		private int $years;

		public function __construct($name,EmployeeType $role, int $years) {
			parent::__construct($name);
			$this->role = $role;
			$this->years = $years;
		}

	}
?>