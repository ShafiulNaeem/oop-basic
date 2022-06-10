<?php include "inc/header.php"; ?>
<?php include "topic/Car.php"; ?>


<?php

class carData extends Car{

    public function __construct($name)
    {
        parent::__construct($name);
        $this->carName();
    }

    public function carName()
    {
        echo "Car name is: ".$this->name."<br/>";
    }
}

$data = new carData('Audi');
echo $data->name;

?>


<?php include "inc/footer.php"; ?>
