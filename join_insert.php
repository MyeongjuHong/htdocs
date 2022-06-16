<?php
    $id = $_POST["id"];
    $pwd = $_POST["pwd"];
    $name = $_POST["name"];

    $con = mysqli_connect("localhost", "root", "", "jjajipja");

    $sql = "insert into members(id, pwd, name, level)";
    $sql .= "values( '$id', '$pwd', '$name', 9 )";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
            window.alert('회원가입이 완료되었습니다!');
            location.href = 'index.php';
        </script>
    ";
?>