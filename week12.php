<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week12</title>
</head>
<body>
    <?php

        //쿠키 생성 예제
    
        $id = setcookie("userid", "hmj");
        $name = setcookie("username", "홍명주", time()+60*60); 
        //쿠키 유효시간(현재시간함수+유효시간(초))

        if($id and $name) {
            echo "쿠키 userid와 username 생성 완료 <br>";
            echo "쿠키 username은 1시간 지속<br>s";
        }

    ?>

    test
    test2
    
</body>
</html>