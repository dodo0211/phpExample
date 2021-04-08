<?php

$fruits = [
    'apple'=>'사과',
    'banana'=>'바나나',    
    'grape'=>'포도',    
    'kiwi'=>'키위',
    'mango'=>'망고'    
];

$vegetables = [
    'celery' => '샐러리',
    'cucumber' => '오이',
    'carrot' => '당근',
    'pepper' => '후추',
    'watermelon'=>'수박',
    'tomato'=>'토마토',
    'strawberry'=>'딸기'
];

$merge = array_merge($fruits, $vegetables);

echo "<pre>";
print_r($merge);
echo "</pre>";

?>