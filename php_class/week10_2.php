<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <!-- week10_2 -->
    <?php
        // $table = $_GET["table"];

        // if($table == "free") {
        //     $$board_title = "자유게시판";
        // } elseif($table == "download") {
        //     $board_title = "자료실";
        // } elseif($table = "notice") {
        //     $board_title = "공지사항";
        // } else {
        //     $board_title = "질문게시판";
        // }
    ?>
    
    <h1><?php// $board_title ?></h1>


    <!-- week10_3 -->
    <?php
        $table = $_GET["table"];
        $type = $_GET["type"];

        if($table == "free") {
            $board_list = "자유 게시판";
        }
        if($table == "qna") {
            $board_list = "질의응답 게시판";
        }
        if($type = "list") {
            $type_title = "목록 보기";
        } 
        if($type == "write") {
            $type_title = "게시물 작성";
        }
    ?>
    
    <h1><?= ">>".$board_list." | ".$type_title; ?></h1>

</body>
</html>