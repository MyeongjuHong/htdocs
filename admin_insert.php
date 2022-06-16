<?php
    $grade = $_POST["grade"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $test_num = $_POST["test_num"];
    $q_title = $_POST["q_title"];
    $q_desc = $_POST["q_desc"];
    $q_quest = $_POST["q_quest"];
    $answer = $_POST["answer"];
    $q_title = $_POST["q_title"];
    $a_desc = $_POST["a_desc"];
    $a_voca = $_POST["a_voca"];

    $con = mysqli_connect("localhost", "root", "", "jjajipja");
    $sql = "insert into questions (grade, yyyy, mmmm, comb, q_title, q_desc, q_quest, answer, a_title, a_desc, a_voca)";
    $sql .= "values ( '$grade', '$year', '$month', '$test_num', '$q_title', '$q_desc', '$q_quest', '$answer', '$a_title', '$a_desc', '$a_voca' )";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
            window.alert('저장 완료!');
            location.href = 'admin_form.php';
        </script>
    ";
?>

