<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
        $grade = $_POST["grade"];
        $year = $_POST["year"];
        $month = $_POST["month"];
        $paper = $_POST["paper"];

        $con = mysqli_connect("localhost", "root", "", "jjajipja");
        
        if($paper == "question") {
            $sql = "select grade, yyyy, mmmm, comb, q_title, q_desc, q_quest from questions where grade='$grade' and yyyy='$year' and mmmm='$month'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_row($result);
    ?>
    <div class="paper">
        <div class="test_name">
            <?="<br><br>고".$row[0]." ";?>
            <?=" ".$row[1]."년 ";?>
            <?=" ".$row[2]."월 모의고사<br>";?>
        </div>
        <div class="test_num">
            <?="<br>".$row[3].". ";?>
        </div>
        <div class="q_title">
            <?="   ".$row[4]."<br>";?>
        </div>
        <div class="q_desc">
            <?="<br>".$row[5]."<br>";?>
        </div>
        <div class="q_num">
            <?="<br>".$row[6]."<br>";?>
        </div>
    </div>
    <?php
        } elseif($paper == "answer") {
            $sql = "select grade, yyyy, mmmm, comb, q_title, q_desc, q_quest, answer, a_title, a_desc, a_voca from questions where grade='$grade' and yyyy='$year' and mmmm='$month'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_row($result);
    ?>
    <div class="paper">
        <div class="test_name">
            <?="<br><br>고".$row[0]." ";?>
            <?=" ".$row[1]."년 ";?>
            <?=" ".$row[2]."월 모의고사<br>";?>
        </div>
        <div class="test_num">
            <?="<br>".$row[3].". ";?>
        </div>
        <div class="q_title">
            <?="   ".$row[4]."<br>";?>
        </div>
        <div class="q_desc">
            <?="<br>".$row[5]."<br>";?>
        </div>
        <div class="q_num">
            <?="<br>".$row[6]."<br>";?>
        </div>
        <div class="answer">
            <?="<br>정답: ".$row[7]."번<br>";?>
        </div>
        <div class="a_title">
            <?="<br>".$row[8]."<br>";?>
        </div>
        <div class="a_desc">
            <?="<br>".$row[9]."<br>";?>
        </div>
        <div class="a_voca">
            <?="<br>voca<br>".$row[10]."<br>";?>
        </div>
    </div>
            <!--  for($i = 0; $i < mysqli_num_fields($result); $i++) {
                echo "<br>".$row[$i]."<br>";
            } -->
    <?php
        }

        mysqli_close($con);
    ?>
</body>
</html>
