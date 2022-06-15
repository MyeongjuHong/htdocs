<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week7</title>
</head>
<body>
    <?php
        echo "=======1.전역변수/지역변수=======<br>";

        function sum($s, $v) { // 함수 선언
            $sum = $s + $v;
            //echo "합계 : {$sum}<br>";
            return $sum;
        }

        $a = sum(100, 200); // 함수 호출
        echo "합계 : {$a}<br>";
        $a = sum(200, 300);
        echo "합계 : {$a}<br>";
        $a = sum(300, 400);
        echo "합계 : {$a}<br>";

        echo "=====2.사용자정의함수/내장함수=====<br>";

        function abs_ex($s) {
            if($s < 0) {
                $s = (-$s);
            }
            return $s;
        }

        $b = abs_ex(100);
        echo "절대값 : {$b}<br>";
        $b = abs_ex(0);
        echo "절대값 : {$b}<br>";
        $b = abs_ex(-100);
        echo "절대값 : {$b}<br>";

        echo "--------------------<br>";

        $c = abs(100);        
        echo "절대값 : {$c}<br>";
        $c = abs(0);        
        echo "절대값 : {$c}<br>";
        $c = abs(-100);        
        echo "절대값 : {$c}<br>";

        echo "=======3.문자열처리내장함수=======<br>";

        $pNum = "I'm MJ! My pnum is 010-1018-1018";
        
        echo "이름과 전화 번호 : {$pNum}<br>";

        $strlen = strlen($pNum);
        echo "문자열 길이 : {$strlen}<br>";

        echo "--------------------<br>";

        $substr = substr($pNum, 4, 2);
        echo "이름 : {$substr}<br>";

        $substr = substr($pNum, 19, 13);
        echo "전화번호 : {$substr}<br>";

        echo "--------------------<br>";

        $explode = explode("!", $pNum);
        echo "이름 소개 : {$explode[0]}<br>";
        echo "전화번호 소개 : {$explode[1]}<br>";
    ?>
</body>
</html>