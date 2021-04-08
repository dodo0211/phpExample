<?php

namespace Erin\ErinStudy;

class Student {
    protected $_name;

    public function __construct($name){
        $this->_name = $name;
    }

    public function name(){
        return $this->_name;
    }
}

namespace Erin\DodoStudy;

class Student {
    protected $_name;

    public function __construct($name){
        $this->_name = $name;
    }

    public function name(){
        return $this->_name;
    }
}

$erinStudy = new \Erin\ErinStudy\Student('ErinStudy');

echo $erinStudy->name()."<br/>";

?>