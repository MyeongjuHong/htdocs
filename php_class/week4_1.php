<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if문</title>
</head>
<body>
    <?php
        $number;

        for($number = 10; $number <= 15; $number++){
            $result = $number."는 3과 5의 배수가 아닙니다.";

            if($number % 3 == 0){
                $result = $number."는 3의 배수입니다.";
            }
            
            if($number % 5 == 0){
                $result = $number."는 5의 배수입니다.";
            }
            
            if($number % 3 == 0 && $number % 5 == 0){
                $result = $number."는 3과 5의 배수입니다.";
            }
    
            echo $result."<br>";
            //마지막으로 참인 if문으로 result 값 변경
        }
    ?>
</body>
</html>

