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
        $name = setcookie("username", "홍명주", time()+60*60*24); 
        //쿠키 유효시간(현재시간함수+유효시간(초))

        if($id and $name) {
            echo "쿠키 userid와 username 생성 완료 <br>";
            echo "쿠키 username은 1시간 지속<br>";
        }

        //쿠키 참조 예제

        if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
            $userid = $_COOKIE["userid"];
            $username = $_COOKIE["username"];
            echo "userid cookie value: ".$userid."<br>";
            echo "username cookie value: ".$username."<br>";
        } else {
            echo "쿠키 생성 오류";
        }


        //쿠키 삭제 예제

        setcookie("userid", "", time()-3600);
        setcookie("username", "", time()-360);

        echo "userid와 username cookie 삭제 완료<br>";

        if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
            $userid = $_COOKIE["userid"];
            $username = $_COOKIE["username"];
            echo "userid cookie value: ".$userid."<br>";
            echo "username cookie value: ".$username."<br>";
        } else {
            echo "쿠키 없음";
        }

    ?>
</body>
</html>