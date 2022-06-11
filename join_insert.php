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
            location.href = 'index.php';
        </script>
    ";
?>