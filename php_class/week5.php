<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week5</title>
</head>
<body>
    <?php
        echo "===== week2_1 =====<br>";
        echo "<h1>3가지 반복문</h1>";

        for($s = 1; $s <= 10; $s++) {
            echo $s."<br>";
        }
        echo "<br>";

        $s = 1;
        while($s <= 10) {
            echo $s."<br>";
            $s++;
        }
        echo "<br>";

        $s = 1;
        do {
            echo $s."<br>";
            $s++;
        }while($s <= 10);


        echo "<br>===== week2_2 =====<br>";
        echo "<h1>2의 배수 구하기</h1>";

        $count = 0;
        $number = 1;

        while($number <= 100) {
            //짝수 출력
            if($number %2 == 0) {
                echo $number." ";
                $count++;
            }
            $number++;
            //10씩 개행
            if($count % 10 == 0) {
                echo "<br>";
            }
        }


        echo "<br>===== week2_3 =====<br>";

    ?>
    <h2>구구단 표 : 2단</h2>
    <table border = "1" width = "150">
        <?php
            $dan = 2;
            $count = 1;

            while($count <= 9) {
                $result = $dan * $count;
                echo "<tr><td align='center'>$dan x $count = $result</td></tr>";
                $count++;
            }
        ?>
    </table>
    <?php
        echo "<br>===== week2_4 =====<br>";
        echo "<h2>구구단 표 : 2단 - 3단</h2>";
        echo "<table border = '1' width = '250'>";

        $dan2 = 2; 
        $dan3 = 3; 
        $count = 1;

        while($count <= 9) {
            $result2 = $dan2 * $count;
            $result3 = $dan3 * $count;
            echo "<tr><td align = 'center'>$dan2 x $count = $result2</td>
                      <td align = 'center'>$dan3 x $count = $result3</td></tr>";
            $count++;
        }

        echo "</table>";


        echo "<br>===== week2_5 =====<br>";
        echo "<h1>다중 loop star table</h1>";
        
        for($s = 1; $s <= 10; $s++) {
            for($v = 1; $v <= $s; $v++) {
                echo " * ";
            }
            echo "<br>";
        }
        
        $s = 1;
        while($s <= 10) {
            for($v = 1; $v <= $s; $v++) {
                echo " * ";
            }
            echo "<br>";
            $s++;
        }

        $s = 1;
        do {
            for($v = 1; $v <= $s; $v++) {
                echo " * ";
            }
            echo "<br>";
            $s++;
        }while($s <= 10);


        echo "<br>===== week2_6 =====<br>";
    ?>

    <h1> 구구단표 : 2단 - 5단</h1>
    <table border = "1" width = "500">
        <tr>
            <th>2단</th> <th>3단</th> <th>4단</th> <th>5단</th>
        </tr>
        <?php
            for($s = 1; $s <= 9; $s++) {
                echo "<tr>";

                for($v = 2; $v <=5; $v++) {
                    $result = $s * $v;

                    echo "<td>$v x $s = $result</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

