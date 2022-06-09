<?php include "inc/header.php"; ?>
<?php include "topic/inheritance.php"; ?>


<?php

echo 'inheritance'.'<br/>';

class GetData extends inheritance{

    public $childData;
    public function show(){
        return "inheritance: ".$this->data.' and '.$this->childData;
    }


}

$data = new GetData('data from parent class');
$data->childData = 'data from child class';
echo $data->show();



?>


<?php include "inc/footer.php"; ?>
