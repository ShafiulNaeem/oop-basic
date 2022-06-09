<?php


class inheritance
{
    public $data;
    public function __construct($data){
        $this->data = $data;
    }

    public function show(){
        return "inheritance: ".$this->data;
    }

}
