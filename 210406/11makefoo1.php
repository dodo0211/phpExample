<?php

$makefoo = true;

/* 여기서 for()은 아직 정의되어 있지 않기 때문에호출 불가
    하지만 bar()는 호출할 수 있습니다.*/

bar();

if($makefoo){
    function foo(){
        echo "여기에 도달하기 전까지 존재하지 않습니다.";
    }
}

/* 변수 $makefoo가 참으로 평가 되어서 foo함수를 호출할 수 있음 */

if ($makefoo) foo();

function bar(){
    echo "PHP 해석이 되지 않아도 바로 호출이 가능합니다. <br/>";
}

?>