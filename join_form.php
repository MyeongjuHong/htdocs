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
    <script type="text/javascript" src="join.js"></script>
    <div class="header">
      <img src="./img/J_logo.png" class="logo" onclick="location.href='index.php'"/>
    </div>
    <div class="body">
      <div class="box">
        <h2>JOIN</h2>
        <form name="join_form" method="post" action="join_insert.php" class="form">
          <input type="text" name="name" placeholder="이름" /><br/>
          <div class="line_match">
            <input type="text" name="id" placeholder="아이디" />
            <img src="./img/J_confirm.png" onclick="check_id()" class="button_j"/><br />
          </div>
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
