<?php

$i = "hello erin.com";

echo strtoupper($i)."<br/>";
echo strtolower($i)."<br/>";
echo ucfirst($i)."<br/>";
echo ucwords($i)."<br/>";
echo lcfirst($i)."<br/>";

$j = strtr($i, "hello", "welcome to");
echo $j."<br/>";

$replace_paris = [
    'hello'=>'welcome',
    'erin'=>'php',
    'com'=>'co/kr'
];

$k = strtr($i, $replace_paris);
echo $k."<br/>";

?>