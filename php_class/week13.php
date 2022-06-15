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


        //세션 사용 예제

        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];


        //세션 삭제 예제

        unset($_SESSION["username"]);

    ?>

    <h3>등록된 세션의 사용</h3>
    <ul>
        <li>등록된 세션 userid 값 : <?= $userid?></li>
        <li>등록된 세션 username 값 : <?= $username?></li>
    </ul>

    <ul>
        <li><?= "userid 세션 : ".$_SESSION["userid"]."<br>"?></li>
        <li><?= "username 세션 : ".$_SESSION["username"]."<br>"?></li>
        <li><?= "username 세션 삭제 완료"?></li>
    </ul>

</body>
</html>