<?php

class StaticTest{
    public static $do_do = "static으로 선언된 변수입니다. <br/>";

    public static function dodo(){
        $do_do = "static으로 선언된 메소드입니다. <br/>";
        echo $do_do;
    }
}

//콜론 두개 = 정적 접근
echo StaticTest::$do_do;
StaticTest::dodo();

?>