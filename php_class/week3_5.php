<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week3_5</title>
</head>
<body>
    <?php
        //정수와 문자의 저장방법
        /*
        정수 1234와 문자열 1234
        - 정수 1234
        2진수 010011010010 4바이트에 저장
        - 문자열 1234
        ASCIICODE로 저장
        문자열1  문자열2 문자열3 문자열4
        110001  110010  110011  110100
        */
        

        //대입연산자

        $value1 = 100;
        echo $value1."<br>";

        //$value1 = $value1 + 100;
        $value1 += 100;

        echo $value1."<br>";

        //$value1 = $value1 - 100;
        $value1 -= 100;

        echo $value1."<br>";

        //$value1 = $value1 * 100;
        $value1 *= 100;

        echo $value1."<br>";

        //$value1 = $value1 / 100;
        $value1 /= 100;

        echo $value1."<br>";

        //$value1 = $value1 % 100;
        $value1 %= 100;

        echo $value1."<br>";

        //$string1 = $string1."php";
        $string1 = "Hello";
        $string1 .= "&emsp; PHP";

        echo $string1."<br>";
    ?>
</body>
</html>

