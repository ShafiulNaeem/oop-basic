<?php include "inc/header.php"; ?>

<?php

class User{
    public $name;
    private $age;
    public $data = [];

    public function userData(){
        return "ok";
    }

    public function __set($height,$value){
        if (array_key_exists($height,$this->data)){
            print_r($this->data);
        }else{
            echo "Setting '$height' Dose not exist to '$value'\n";
            $this->data[$height] = $value;
        }

    }

    public function __get($height){
        if (array_key_exists($height,$this->data)){
            print_r($this->data);
        }else{
            echo "Dose not exist ".$height."<br/>";
            print_r($this->data);
            echo "<br/>";
        }
    }

    public function __call($method,$parameters){
        echo "<br/>". "Name of method =>" . $method."\n";
        echo "<br/>"."Parameters provided\n"."<br/>";
        print_r($parameters);
    }


}

$user = new User();
$user->name = "tr";
$user->height = 24;
$user->height;
$user->userData();
$user->show('Rifat','24','68');


?>

<?php include "inc/footer.php"; ?>
