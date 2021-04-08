<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "123456";
$mysql_db = "mydb";

// mySQL 데이터베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

// 연결 오류 발생 시 스크립트 종료
if(!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

// 데이터 레코드 수정 확인
$sql = "UPDATE movie_director SET name='홍길동' WHERE id = 9";

if(mysqli_query($conn, $sql)) {
    echo "레코드가 성공적으로 업데이트 되었습니다.";
}else{
    echo "업데이트 실패: " . mysql_error($conn);
}

mysqli_close($conn);
?>