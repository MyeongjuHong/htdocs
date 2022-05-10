<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sender</title>
</head>
<body>
    <form name="form1" method="post" action="8_receiver.php">
        <input type="text" name="name1">
        <br><br>
        <input type="text" name="birthDay">
        <br><br>
        <input type="submit" value="전송">
    </form>

    <form name="form1" method="post" action="8_receiver.php">
        <ul>
            <li>&nbsp;I&nbsp;D&nbsp; : <input type="text" name="id"></li>
            <li>PWD : <input type="password" name="pwd"></li>
            <li><input type="submit" value="전송"></li>
        </ul>
    </form>
    
    <form name="form1" method="post" action="8_receiver.php">
        성별 : 남성 <input type="radio" name="gender" value="남" checked>
                여성 <input type="radio" name="gender" value="여"><br>

        이메일 : 수신 <input type="radio" name="email" value="예">
                비수신 <input type="radio" name="email" value="아니오" checked><br>
        <input type="submit" value="확인">
    </form>
        
    <form name="form1" method="post" action="8_receiver.php">
        <h2>당신의 취미는?</h2>
        <h4>
            영화감상 <input type="checkbox" name="hobby[]" value="영화감상"><br>
            맛집탐방 <input type="checkbox" name="hobby[]" value="맛집탐방"><br>
            독서 <input type="checkbox" name="hobby[]" value="독서"><br>
            요가 <input type="checkbox" name="hobby[]" value="요가"><br>
            축구 <input type="checkbox" name="hobby[]" value="축구"><br>
        </h4>
        <input type="submit" value="서버로 전송">
    </form>
</body>
</html>