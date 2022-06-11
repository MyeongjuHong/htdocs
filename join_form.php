<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>join</title>
  </head>
  <body>
    <script type="text/javascript" src="jjajipja.js"></script>
    <span class="header">
      <span class="title" onclick="location.href='index.html'">
        <div class="logo1">jjajipja</div>
        <div class="logo2">영어 모의고사 필터링 서비스</div>
      </span>
      <span class="member"> </span>
    </span>
    <div class="body">
      <div class="box">
        <form name="join_form" method="post" action="join_insert.php">
          <input type="text" name="name" placeholder="이름" /><br/>
          <input type="text" name="id" placeholder="아이디" />
          <img src="./img/J_confirm.png" onclick="check_id()" clas="button"/><br />
          <input type="password" name="pwd" placeholder="비밀번호" /><br />
          <input type="password" name="pwdC" placeholder="비밀번호 확인" /><br />
          <img src="./img/J_join.png" onclick="check_input()" class="button"/>
        </form>
        <div class="member">
        </div>
      </div>
    </div>
  </body>
</html>
