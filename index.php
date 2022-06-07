<?php include "inc/header.php"; ?>
<?php include "topic/Details.php"; ?>


<?php

class Person{
	public $name;
	public $age;
	public $details;
	const CITY = "Dhaka";
	public static $myStaticProperty = 'Hyvor';

	public function __construct(){
		$details = new Details("09876543");
		$this->details = $details->hello();
	}


	public function personName(){

		$data = self::getStatic();

		echo "Person Name is:".$this->name."<br/>".
			"Details constructor data: ".$this->details."<br/>".
			"Static function data: ".$data."<br/>".
			"Static data: ".self::$myStaticProperty."<br/>";
    }

	public static function getStatic(){
		return "It's a static function";
	}

  	public function personAge($value){
		echo "Person Age is:".$this->age=$value."<br/>"."City Constant: ".Person::CITY;
   	}

	public function __destruct(){
		echo "its a destructor";
	}

  }

$personOne = new Person;
$personOne->name="Ariful Islam";
$personOne->personName();
echo "<br/>";
$personOne->personAge("18");




?>


<?php include "inc/footer.php"; ?>
