<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>week3_1</title>
    </head>
    <body>
        <?php
            $title = "<h2>개인 정보</h2>";
            $name = "홍길동";
            $phone = "010-0001-0002";
            $email = "hong@gmail.com";

            echo $title;
            echo "이름 : $name <br>";
            echo "전화 : $phone <br>";
            echo "메일 : $email <br>";
        ?>
        <p><?=$title?></p>
        <p>이름 : <?=$name?></p>
        <p>전화 : <?=$phone?></p>
        <p>메일 : <?=$email?></p>
    </body>
</html>

