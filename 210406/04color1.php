<?php

$color = "red";
function echoColor() {
    //외부의 변수를 참고하기 위해서는 global(전역변수)로 선언 필수
    //안하면 오류
    global $color;
    echo $color;
}
echoColor();

?>