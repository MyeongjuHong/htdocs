<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <!-- week10_3 -->
    <?php
        $table1 = "free";
        $table2 = "qna";
    ?>

    <h3> 자유 게시판 </h3>

    <a href = "week10_2.php?table=<?=$table1?>&type=list">보드뷰</a><br>
    <a href = "week10_2.php?table=<?=$table1?>&type=write">글쓰기</a><br>


    <h3> 질의응답 게시판 </h3>

    <a href = "week10_2.php?table=<?=$table2?>&type=list">목록 보기</a><br>
    <a href = "week10_2.php?table=<?=$table2?>&type=write">글쓰기</a><br>

</body>
</html>