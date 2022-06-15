<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>switch문</title>
</head>
<body>
    <?php
        $month;
        $season;

        for($month = 1; $month <= 13; $month++) {
            switch($month) {
                case 12:
                    // $season = "겨울";
                    // break;
                case 1: 
                    // $season = "겨울";
                    // break;
                case 2: 
                    $season = "겨울";
                    break;
                case 3: 
                    // $season = "봄";
                    // break;
                case 4: 
                    // $season = "봄";
                    // break;
                case 5: 
                    $season = "봄";
                    break;
                case 6: 
                    // $season = "여름";
                    // break;
                case 7: 
                    // $season = "여름";
                    // break;
                case 8: 
                    $season = "여름";
                    break;
                case 9:
                    // $season = "가을";
                    // break;
                case 10:
                    // $season = "가을";
                    // break;
                case 11:
                    $season = "가을";
                    break;
                default:
                    $season = "입력오류";
            }

            //echo $month."는 ".$season."입니다.<br>";
            echo "{$month}는 {$season}입니다.<br>";


            if($month == 12 || $month == 1 || $month == 2) {
                $season = "겨울";
            // } elseif($month == 2) {
            //     $season = "겨울";
            } elseif($month == 3 || $month == 4 || $month == 5) {
                $season = "봄";
            // } elseif($month == 4) {
            //     $season = "봄";
            // } elseif($month == 5) {
            //     $season = "봄";
            } elseif($month == 6 || $month == 7 || $month == 8) {
                $season = "여름";
            // } elseif($month == 7) {
            //     $season = "여름";
            // } elseif($month == 8) {
            //     $season = "여름";
            } elseif($month == 9 || $month == 10 || $month == 11) {
                $season = "가을";
            // } elseif($month == 10) {
            //     $season = "가을";
            // } elseif($month == 11) {
            //     $season = "가을";
            // } elseif($month == 12) {
            //     $season = "겨울";
            } else {
                $season = "입력오류";
            }

            //echo $month."는 ".$season."입니다.<br>";
            echo "{$month}는 {$season}입니다.<br>";
        }
    ?>
</body>
</html>

