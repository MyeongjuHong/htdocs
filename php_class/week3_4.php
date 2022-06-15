<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week3_4</title>
</head>
<body>
    <?php
        $string1 = "Hello";
        $string2 = "PHP";
        echo $string1." ".$string2."<br>";
        echo $string1."     ".$string2."<br>";
        //in browser, 빈칸 n개 => 1개로 처리

        echo "--------------------<br>";
        $number1 = "010";
        $number2 = "0001";
        $number3 = "0002";

        $mobile_phone_number = $number1."-".$number2."-".$number3;
        echo $mobile_phone_number;
    ?>
</body>
</html>

