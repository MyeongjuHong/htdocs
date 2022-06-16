<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?after" />
    <title>admin</title>
</head>
<body>
    <?php include 'header.php'?>
    <script type="text/javascript" src="admin.js"></script>
    <div class="admin_box">
        <form name="admin_form" method="post" action="admin_insert.php" class="admin_form">
            <table border="0">
                <th colspan="2"><h3>문제 입력하기</h3></th>
                <tr><!--1열-->
                    <td class="table_title">정보</td>
                    <td>
                        <input type="number" name="grade" placeholder="학년을 입력하세요">학년</input>
                        <input type="number" name="year" placeholder="년도를 입력하세요">년</input>
                        <input type="number" name="month" placeholder="월을 입력하세요">월 모의고사</input><br/>
                    </td>
                </tr>
                <tr><!--2열-->
                    <td class="table_title">문제</td>
                    <td>
                        <input type="number" name="test_num" placeholder="번호를 입력하세요">번.</input><br/>
                        <textarea name="q_title" rows="1" cols="70" placeholder="문제를 입력하세요" value=""></textarea><br/>
                    </td>
                </tr>
                <tr><!--3열-->
                    <td class="table_title">문제</td>
                    <td>
                        <textarea name="q_desc" rows="15" cols="70" placeholder="지문을 입력하세요"></textarea><br/>
                        <textarea name="q_quest" rows="5" cols="60" placeholder="문항을 입력하세요" value=""></textarea><br/>
                    </td>
                </tr>
                <tr><!--4열-->
                    <td class="table_title">정답</td>
                    <td>
                        <input type="number" name="answer" placeholder="정답을 입력하세요">번</input><br/>
                    </td>
                </tr>
                <tr><!--5열-->
                    <td class="table_title">해설</td>
                    <td>
                        <textarea name="a_title" rows="1" cols="70" placeholder="문제 입력하세요" value=""></textarea><br/>
                        <textarea name="a_desc" rows="15" cols="70" placeholder="지문을 입력하세요"></textarea><br/>
                    </td>
                </tr>
                <tr><!--6열-->
                    <td class="table_title table_bottom">단어</td>
                    <td class="table_bottom">
                        <textarea name="a_voca" rows="10" cols="50" placeholder="단어를 입력하세요" value=""></textarea><br/>
                    </td>
                </tr>
            </table>
            <div class="save">
                <img src="./img/J_save.png" onclick="check_input()" class="save_button"/>
            </div>
        </form>
    </div>
</body>
</html>