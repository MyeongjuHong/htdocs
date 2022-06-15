<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- <form name="form1" method="post" action="9_receiver.php">
        이메일 : <input type="text" name="email1"> @
        <select name="email2">
            <option value="">선택하세요</option>
            <option value="naver.com">naver.com</option>
            <option value="gmail.com">gmail.com</option>
            <option value="hanmail.net">hanmail.net</option>
        </select>
        <input type="submit" value="전송">
    </form> -->

    
    <!-- <form name="form1" method="post" action="9_receiver.php">
        <input type="text" name="id">
        <input type="hidden" name="pwd" value="1018">
        <input type="submit" value="전송">
    </form> -->

    <form name="form1" method="post" action="9_receiver.php" enctype="multipart/form-data">
        <div>이미지 업로드 : <input type="file" name="upload"></div>
        <div>이미지 설명 : <textarea name="desc" rows="5" cols="50"></textarea></div>
        <div><input type="submit" value="전송"></div>
    </form>
    
</body>
</html> 