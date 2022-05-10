<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if-else문</title>
</head>
<body>
    <?php
        $number;
        $result;
        $symbol;

        for ($number = 10; $number <= 15; $number++) {
            if($number % 3 == 0 && $number % 5 == 0) {
                $result = $number."는 3과 5의 배수입니다.";
                $symbol = "------------------------------";
            } elseif ($number % 3 == 0) {
                $result = $number."는 3의 배수입니다.";
                $symbol = "==============================";
            } elseif ($number % 5 == 0) {
                $result = $number."는 5의 배수입니다.";
                $symbol = "****************************";
            } else {
                $result = $number."는 3과 5의 배수가 아닙니다.";
                $symbol = "##############################";
            }

            echo $result."<br>";
            echo $symbol."<br>";
        }
    ?>
</body>
</html>

