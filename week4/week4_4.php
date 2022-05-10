<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>중첩 if문</title>
</head>
<body>
    <?php
    $num;
    $result;

    for ($num = 12; $num <= 15; $num++) {
        if($num % 3 == 0) {
            $result = $num."는 3의 배수입니다.";
            if($num % 5 == 0) {
                $result = $num."는 3과 5의 배수입니다.";
            }
        } else {
            $result = $num."는 3의 배수가 아닙니다.";
        }

        echo $result."<br>";
    }
    ?>
</body>
</html>

