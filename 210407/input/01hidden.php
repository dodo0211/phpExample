<?php
$name = "에린";
$id = "erin";
$email = "dodo0211@github.com";
?>

<html>
    <head>
        <title>Hidden</title>
    </head>
    <body>
        <h1>Hidden Example</h1>
            <form action="../post_get/02post_result.php" method="post">
                <!-- 데이터를 전송받아 특정 값을 사용하고 싳은 경우 hidden 속성을 사용 -->
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="submit" value="전송">         
            </form>
    </body>
</html>