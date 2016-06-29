<?php
class person 
	{
		public $name;
		public $gender; 
		public $age; 
		public $type; 
		public $os;
		public $minAge;
		public $maxAge;
		//constructor
		function __construct()
		{
			$this->name = $_POST['name'];
			$this->gender = $_POST['gender'];
			$this->age = $_POST['age'];
			$this->type = $_POST['type'];
			$this->os = $_POST['OS'];
			$this->minAge = $_POST['minAge'];
			$this->maxAge = $_POST['maxAge'];
		}//default constructor
		function toString()
		{
			return $this->name . "," . $this->gender . "," . $this->age . "," . $this->type . "," . $this->os . "," . $this->minAge . "," . $this->maxAge;
		}//toString
	}//person
?>