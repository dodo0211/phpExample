<?php

function test1($arg1, $arg2 = "default"){}

test1("tt");

function test2($arg1 = "default", $arg2){}

//틀려먹은 방법
// test2("tt");

//옳은 방법, 파라미터 맞추기
test2("aa", "bb");

?>