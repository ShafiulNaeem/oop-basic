<?php


class Details
{
    public $phone;
    public function __construct($phone){
       $this->phone = $phone;
    }

    public function hello(){
        return "Phone number is: ".$this->phone;
    }

}
