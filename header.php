<div class="header_logic">
    <div class="logo" onclick="location.href='index.php'"><img src="./img/J_logo.png" class="logo"/></div>
    <?php
        session_start();
        if(isset($_SESSION["userid"])) {
            $userid = $_SESSION["userid"];
        } else {
            $userid = "";
        }
        
        if(isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
        } else {
            $username = "";
        }
        
        if(isset($_SESSION["userlevel"])) {
            $userlevel = $_SESSION["userlevel"];
        } else {
            $userlevel = "";
        }    
    ?>

    <?php
        if(!$userid) {
    ?>
        <div class="user">
            <span>로그인 해주세요</span>
            <span>|</span>
            <a href="login_form.php">로그인</a>
        </div>
    <?php
        } else {
            $logged = $username."(@".$userid.")님";
    ?>
        <div class="user">
            <span><?=$logged?></span>
            <span>|</span>
    <?php
            if($userlevel == 1) {
    ?>
                <a href="admin_form.php">관리자모드</a>
                <span>|</span>
                <!-- //// -->
    <?php
            } else {
                error_log('user level error');
            }
    ?>
            <a href="logout.php">로그아웃</a>
        </div>
    <?php
        }
    ?>
</div>