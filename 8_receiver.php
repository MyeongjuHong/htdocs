<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>receiver</title>
</head>
<body>
    <?php
        $name = $_POST["name1"];
        $birthDay = $_POST["birthDay"];
        echo $name."님, 반갑습니다.<br>";
        echo "당신의 생일은 ".$birthDay."입니다.<br>";
    ?>
    
    
    <?php
        $id = $_POST["id"];
        $pwd = $_POST["pwd"];
    ?>
    <h3>
        아이디 : <?php echo $id ?>
        <br>
        비밀번호 : <?= $pwd ?>
    </h3>

    
    <?php
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        
        if($email == "예") {
            $email = "메일 수신";
        } else {
            $email = "메일 비수신";
        }
    ?>
    <h3>
        성별 : <?= $gender?><br>
        메일 : <?= $email?>
    </h3>


    <h3>나의 취미는 : </h3>
    <h5>
        <?php
            $num = count($_POST["hobby"]);

            for($i = 0; $i < $num; $i++) {
                echo $_POST["hobby"][$i];
                echo "<br>";
            }
        ?>
    </h5>
</body>
</html>