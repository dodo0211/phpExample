<?php
// 라이브러리 사용을 위한
include_once('./PHPMailer/PHPMailerAutoload.php');

function mailer($fname, $fmail, $to, $subject, $content){
    $mail = new PHPMailer();

    $mail->IsSMTP();

    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.naver.com";
    $mail->Port = 465;
    $mail->Username = "minar2010@naver.com";
    $mail->Password = "ssjn0429^^";

    $mail->CharSet = 'UTF-8';
    $mail->From = $fmail;
    $mail->FromName = $fname;
    $mail->Subject = $subject;
    $mail->msgHTML($content);
    $mail->addAddress($to);

    return $mail->send();
}

?>