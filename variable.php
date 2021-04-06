<?php

class Variable
{
    public $name = "DODO";
    public $year = 2018;

    public function sunStudy()
    {
        echo "변수 name은 {this->name} 입니다. <br/>";
        echo "변수 year은 {this->year} 입니다. <br/>";
        echo $this->name . $this->year . "<br/>";
    }
}

$variable = new Variable();
$variable->sunStudy();

?>