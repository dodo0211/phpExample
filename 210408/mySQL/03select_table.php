<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "123456";
$mysql_db = "mydb";

// mySQL 데이터베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

// 연결 오루 발생 시 스크립트 종료
if(!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movie_director";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    // 검색 항목을 반복문을 이용하여 순서대로 출력
    while($row = mysqli_fetch_array($result)) {
        echo "id: " . $row['id']. " - name: " . $row['name']. " - birthday: " . $row['birthday']. "<br/>";
    }
}else{
    echo "저장된 데이터가 없습니다.";
}

// 데이터베이스 전송 종료
mysqli_close($conn);
?>