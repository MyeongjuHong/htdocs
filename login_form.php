<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>login</title>
  </head>
  <body>
    <script type="text/javascript" src="login.js"></script>
    <div class="header">
      <img src="./img/J_logo.png" class="logo" onclick="location.href='index.php'"0./>
    </div>
    <div class="body">
      <div class="box">
        <h2>LOGIN</h2>
          <div class="form_join">
          <form name="login_form" method="post" action="login_check.php" class="form">
            <input type="text" name="id" placeholder="아이디" /><br />
            <input type="password" name="pwd" placeholder="비밀번호" /><br />
            <img src="./img/J_login.png" onclick="check_input()" class="button"/>
          </form>
          <div class="member">
            <a href="#" onclick="location.href='join_form.php'">회원가입</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
