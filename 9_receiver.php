<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // $email1 = $_POST["email1"];
        // $email2 = $_POST["email2"];
    ?>
    <!-- <h3> 이메일 : <?php //echo $email1."@".$email2; ?> </h3> -->

    <?php
        // $userId = $_POST["id"];
        // $pwd = $_POST["pwd"];
    ?>

    <!-- <h3> 아이디 : <?php //$userId?> </h3>
    <h3> 비밀번호 : <?php //$pwd?> </h3> -->

    <?php
        $file_dir = "C:/xampp/htdocs/images2/";
        $file_path = $file_dir.$_FILES["upload"]["name"];

        if(move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {
            $img_path = "images2/".$_FILES["upload"]["name"];
    ?>
            <div><img src="<?=$img_path?>"></div>
            <div><?=$_POST["desc"]?></div>

    <?php

        } else {
            echo "파일 업로드 오류! 코드 확인 요망";
        }

    ?>


</body>
</html>