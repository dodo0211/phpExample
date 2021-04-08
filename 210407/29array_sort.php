<?php

$fruits = [
    'apple'=>'사과',
    'banana'=>'바나나',    
    'grape'=>'포도',    
    'kiwi'=>'키위',
    'mango'=>'망고' 
];

$fruits2 = $fruits;
$fruits3 = $fruits;

// value값 기준 가나다 정렬
sort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

// value 값 기준 가나다 반대로
rsort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

// 키값 기준 정렬
ksort($fruits2);

echo "<pre>";
print_r($fruits2);
echo "</pre>";

// 키값 반대로 정렬
krsort($fruits2);

echo "<pre>";
print_r($fruits2);
echo "</pre>";

asort($fruits3);

echo "<pre>";
print_r($fruits3);
echo "</pre>";

arsort($fruits3);

echo "<pre>";
print_r($fruits);
echo "</pre>";

?>