<?php
$name = "에린";
$id = "erin";
$email = "erin@naver.com";
?>

<html>
    <head>
        <title>Get</title>
    </head>

    <body>
        <h1>Get Example</h1>
        <!-- &로 구분 -->
        <a href="./04get_result.php?name=<?php echo $name; ?>&id=<?php echo $id; ?>&email=<?php echo $email; ?>">전송</a>
    </body>
</html>