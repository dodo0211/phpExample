<?php

//parents class 가져옴
include "14parents.php";

class Child extends Parents{
    public function echoPar(){
        echo $this->par;
    }
}

$child = new Child();
$child->echoPar();

?>