<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week6</title>
</head>
<body>
    <?php
        //일반 변수 이용해 평균 구하기
        $sub1 = 90;
        $sub2 = 92;
        $sub3 = 95;
        $sub4 = 98;
        $sub5 = 97;

        $sum1 = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;

        $result1 = $sum1 / 5;
        
        //배열 이용해 평균 구하기
        $sub[0] = 90;
        $sub[1] = 92;
        $sub[2] = 95;
        $sub[3] = 98;
        $sub[4] = 97;

        $sum2 = $sub[0] + $sub[1] + $sub[2] + $sub[3] + $sub[4];

        $sum3 = 0;

        for($s = 0; $s <= 4; $s++) {
            $sum3 = $sum3 + $sub[$s];
        }

        $result2 = $sum3 / count($sub);

        echo "변수의 sum : {$sum1}<br>";
        echo "변수의 average : {$result1}<br>";
        echo "배열의 sum : {$sum3}<br>";
        echo "배열의 average : {$result2}";
        echo "<br>---------------------<br>";


        //기본 형식 배열 선언
        $a[0] = 10;
        $a[1] = 20;
        $a[2] = 30;
        $a[3] = 40;
        $a[5] = 50;

        //array 함수 배열 선언
        $num = array(10, 20, 30, 40, 50);

        for($s = 0; $s <= 4; $s++) {
            echo "$num[$s] / ";
        }
        echo "<br>---------------------<br>";
        


        //2차원 배열로 총점과 평균 구하기
        $score = array(array(10, 20, 30, 40, 50),
                       array(60, 70, 80, 90, 100),
                       array(110, 120, 130, 140, 150));

        for($s = 0; $s <= 2; $s++) {
            for($v = 0; $v <= 4; $v++) {
                echo "\$score[$s][$v] : ".$score[$s][$v]."<br>";
                //2차원 배열일 때, php 엔진이 인식X (문자열로 인식)
                //=> {}로 감싸거나 문자열 연산자 . 이용
            }
        }
        echo "---------------------<br>";

        for($s = 0; $s <= 2; $s++) {
            $sum4 = 0;
            for($v = 0; $v <= 4; $v++) {
                $sum4 = $sum4 + $score[$s][$v];
            }
            $average = $sum4 / 5;
            $b = $s + 1;
            echo "{$b}번째 학생 총점 : {$sum4} / ";
            echo "{$b}번째 학생 평균 : {$average}<br>";
            //수식X => 변수에 저장
        }
    ?>
</body>
</html>