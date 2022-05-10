<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if-elseif-else문</title>
</head>
<body>
    <?php
        $char = '8';
        $result;

        if ($char >= 'A' && $char <= 'Z') {
            $result = $char."는 영문 대문자입니다.";
        } elseif ($char >= 'a' && $char <= 'z') {
            $result = $char."는 영문 소문자입니다.";
        } else {
            $result = $char."는 영문이 아닙니다.";
        }

        echo $result;
    ?>
</body>
</html>

