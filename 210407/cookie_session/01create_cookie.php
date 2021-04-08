<?php
    $cookie_name = "myCookie";
    $cookie_value = "Apply";
    setcookie($cookie_name, $cookie_value, time() + 86400 * 30);
?>

<html>
<head>
    <title>Create Cookie</title>
</head>
<body>
<h1>Cookie Example</h1>
    쿠키를 만듭니다. <br/>
    <!-- hypertext reference -->
    쿠키 내용은 <a href="./02result_cookie.php">여기로</a>!!!
</body>
</html>