<?php

    //1
    echo "php는 스크립트 언어입니다.<br>";
    echo "----- Hello!! PHP .. -----<br>";

    //2
    $value1 = 100; //실수형 데이터
    $value2 = 200;
    $sum1 = $value1 + $value2;

    $value3 = 100.20; //정수형 데이터
    $value4 = 200.32;
    $sum2 = $value3 + $value4;

    $string1 = "오렌지"; //문자열 데이터
    $string2 = "Orange";
    $sum3 = $string1.$string2;

    echo "$sum1<br>";
    echo "$sum2<br>";
    echo "$sum3<br>";
    echo "$string1<br>";
    echo "$string2<br>";
    echo "--------------------<br>";

    //4
    $name = "홍명주";
    echo "$name<br>";
    echo "$name 님 반갑습니다.<br>";
    echo '$name님 반갑습니다.<br>';
    /* 문자열에서는 값이 동일하나,
    작은 따옴표는 변수를 읽지 못한다 */
    echo "{$name}님 반갑습니다.<br>";
    /* 변수, 문자열 붙여 출력 시,
    변수명을 중괄호로 감싸기 */

?>

