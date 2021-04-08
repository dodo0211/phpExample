<?php

//축약형 배열일 때, 대괄호
//축약형이 아닐 때, 소괄호
$fruits = [
    "apple"=>"사과",
    "strawberry"=>"딸기",
    "banana"=>"바나나"
];

echo "값만 사용 <br/>";
foreach($fruits as $fruit){
    echo "{$fruit}<br/>";
}

echo "키와 값 모두를 사용 <br/>";
foreach($fruits as $eng => $kor){
    echo "{$eng} => {$kor}<br/>";
}

?>