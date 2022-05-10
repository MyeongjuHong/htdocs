<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week3_3</title>
</head>
<body>
    <?php
        $value1 = 20;
        $value2 = 3;
        
        $sum = $value1 + $value2;
        $sub = $value1 - $value2;
        $mul = $value1 * $value2;
        $div = $value1 / $value2;
        $mod = $value1 % $value2;
        $fis = $value1 ** $value2;

        echo "$sum <br>";
        echo "$sub <br>";
        echo "$mul <br>";
        echo "$div <br>";
        echo "$mod <br>";
        echo "$fis <br>";
        echo "--------------------<br>";

        //$value1 = $value1 + 1;
        $value1++;
        echo $value1."<br>";
        echo $value1++."<br>"; //출력후 증가
        echo $value1."<br>"; //증가된값 출력
        echo "--------------------<br>";

        echo ++$value1."<br>"; //출력전 증가
        echo $value1."<br>";
        echo "--------------------<br>";

        //$value1 = $value1 - 1;
        $value1--;
        echo $value1."<br>";
        echo $value1--."<br>"; //출력후 증가
        echo $value1."<br>"; //증가된값 출력출력
        echo "--------------------<br>";

        echo --$value1."<br>"; //출력전 증가
        echo $value1."<br>";
    ?>
</body>
</html>

