<?php include "inc/header.php"; ?>
<?php include "topic/Shape.php"; ?>
<?php include "topic/ShapeColor.php"; ?>


<?php

class Triangle implements Shape,ShapeColor {

    public $colorName;

    public function __construct($colorName){
        $this->colorName = $colorName;
        $this->color();
    }

    public function shapeName($name)
    {
        return "Shape Name is ". $name;
    }

    public function calculateArea($height,$weight)
    {
        $area = 0.5*$height*$weight;
        return "Shape Area is ". $area;
    }

    public function color()
    {
        echo "Shape Color is ".$this->colorName.'<br/>';
    }
}

$data = new Triangle('Red');
echo $data->shapeName('Triangle')."<br/>";
echo $data->calculateArea(5,6);


?>


<?php include "inc/footer.php"; ?>
