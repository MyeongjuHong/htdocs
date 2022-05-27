<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        //쿠키 생성 예제

        session_start();
        echo "세션 시작<br>";

        $_SESSION['userid'] = "hmj2";
        $_SESSION['username'] = "홍명주2";
        echo "세션 등록 완료<br>";

        echo $_SESSION['userid']."<br>";
        echo $_SESSION['username']."<br>";

    ?>
</body>
</html>