<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <title>test</title>
</head>
<body>
    <script type="text/javascript" src="test.js"></script>
    <div class="body">
        <div class="filter">
            <form name="test_form" method="post" action="test_check.php" class="line_match item_around">
                <img src="./img/J_send.png" class="button_j" onclick="check_select()"/>
                <select name="grade">
                    <option name="grade" value="0">학년</option>
                    <option name="grade" value="1">고1</option>
                    <option name="grade" value="2">고2</option>
                    <option name="grade" value="3">고3</option>
                </select>
                <select name="year">
                    <option name="year" value="0">년</option>
                    <option name="year" value="2021">2021</option>
                    <option name="year" value="2022">2022</option>
                </select>
                <select name="month">
                    <option name="month" value="0">월</option>
                    <option name="month" value="3">3</option>
                    <option name="month" value="10">10</option>
                </select>
                <div>
                    <input type="radio" name="paper" value="question" checked>문제만</input>
                </div>
                <div>
                    <input type="radio" name="paper" value="answer">해설도</input>
                </div>
            </form>
        </div>
        <h4>시험지를 선택해주세요!</h4>
    </div>
</body>
</html>
