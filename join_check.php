<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <title>Join Check</title>
</head>
<body>
    <?php
        $id = $_GET["id"];
        if(!$id) {
            echo("<h3>아이디를 입력해 주세요</h3>");
        } else {
            $con = mysqli_connect("localhost", "root", "", "jjajipja");
            $sql = "select * from members where id='$id'";
            $result = mysqli_query($con, $sql);
            $num_record = mysqli_num_rows($result);

            if($num_record) {
                echo "<h3>".$id." 는 중복된 아이디입니다.</h3>";
                echo "<h3>다른 아이디를 사용해 주세요.</h3>";
            } else {
                echo "<h3>".$id." 는 사용 가능한 아이디입니다.</h3>";
            }

            mysqli_close($con);
        }
    ?>
    <img src="./img/J_cancel.png" class="button" onclick="javascript:self.close()"/>
</body>
</html>