<?php

// 요청한 파일명
$filename = $_GET['file'];

// 서버에 저장된 파일 경로
$filepath = $_SERVER['DOCUMENT_ROOT'].'/phpexample/210407/file/uploads/'.$filename;

// 파일이 존재하는디 확인
if(!is_file($filepath) || !file_exists($filepath)){
    echo '파일이 존재하지 않습니다.';
    exit;
}

// 브라우저 체크
if(preg_match("/msie/i", $_SERVER['HTTP_USER_AGENT']) && preg_match("/5\.5/", $_SERVER['HTTP_USER_AGENT'])){
    header("content-type: dosen/matter");
    header("content-length: ".filesize("$filepath"));
    header("content-disposition: attachment; filename=\"$filename\"");
    header("content-transfer-encoding: binary");
}else{
    header("content-type: file/unknown");
    header("content-length: ".filesize("$filepath"));
    header("content-disposition: attachment; filename=\"$filename\"");
    header("content-description: php generated data");
}

header("pragma: no-cache");
header("expires: 0");

$fp = fopen($filepath, 'rb');

while(!feof($fp)){
    echo fread($fp, 100*1024);
}
fclose($fp);

?>