<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week3_6</title>
</head>
<body>
    <?php
        //비교연산자
        $value1 = 100;
        $value2 = 200;

        $value3 = $value1 > $value2;
        echo $value3."<br>";
        echo var_dump($value3)."<br>";
        //false = null

        $value4 = ($value1 <= $value2) && ($value2 > 150);
        echo $value4."<br>";
        echo var_dump($value4);

    ?>
</body>
</html>

