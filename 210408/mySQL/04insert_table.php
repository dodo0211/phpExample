<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "123456";
$mysql_db = "mydb";

// mySQL 데이터베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

// 연결오류 발생 시 스크립트 종료
if(!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

// 데이터 레코드 추가 쿼리
$sql  = "INSERT INTO movie_director (id, name, birthday) VALUES (9, '제임스 카메룬', '1954-08-16');";

if(mysqli_query($conn, $sql)) {
    echo "새 레코드가 성공적으로 생성되었습니다.";
}

// 데이터베이스 접속 종료
mysqli_close($conn);
?>