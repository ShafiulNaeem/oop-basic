<?php include "inc/header.php"; ?>
<?php include "topic/Details.php"; ?>


<?php

class Person{
	public $name;
	public $age;
	public $details;

	public function __construct(){
		$details = new Details("09876543");
		$this->details = $details->hello();
	}

	public function personName(){
		echo "Person Name is:".$this->name."<br/>"."Details constructor data: ".$this->details."<br/>";
    }

  	public function personAge($value){
		echo "Person Age is:".$this->age=$value;
   	}

	public function __destruct(){
		echo "its a destructor";
	}

  }

$personOne = new Person;
$personOne->name="Ariful Islam";
$personOne->personName();

$personOne->personAge("18");




?>


<?php include "inc/footer.php"; ?>
