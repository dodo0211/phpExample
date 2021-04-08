<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "123456";
$mysql_db = "mydb";

// mySQL 데이터베이스 연결
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

// 연결 오류 발생 시 스크립트 종료
if($conn->connect_error){
    die("연결 실패: " . $conn->connect_error);
}
echo "연결 성공";

?>