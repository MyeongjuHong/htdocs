<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>PHP 이미지 처리</title>
  </head>
  <body>
    <h2>
      <?php 
      echo "Summer Images<br>"; ?>
    </h2>
    <?php
        $summerImg1 = "sea.jpg";
        $summerImg2 = "rain.jpg";

        echo "<img src = '$summerImg1'/>";
        echo "<img src= '$summerImg2'/><br />";
        // 따옴표 겹치지 않도록 확인! => 코드에러
        echo "<img src = \"$summerImg1\"/>";
        echo "<img src= \"$summerImg2\"/><br>";
        // or 중간 따옴표에 이스케이프 문자 사용
        echo "\\---\$---\"";
        // 그냥 쓰면 안되는 \와 $, 그리고 " 출력
        ?>
  </body>
</html>


