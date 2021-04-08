<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "123456";
$mysql_db = "mydb";

// mySQL 데이터베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn) {    //연결 오류 발생 시 스크립트 종료
    die("연결 실패: " . mysql_connect_error());
}
echo "연결 성공";
?>