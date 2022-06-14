
<div class="header">
    <span class="title" onclick="location.href='index.html'">
        <div class="logo">jjajipja<br/>영어 모의고사 필터링 서비스</div>
    </span>
    <!-- 로그인 전 북마크 클릭 시 로그인 후 이용 가능! -->
    <!-- <span class="bookmark" onclick="location.href='bookmark.html'">북마크</span> -->
    <!-- <span class="member">
    <a href="#" onclick="location.href='login_form.php'">로그인</a>
    </span> -->
</div>
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

<div></div>

<?php
    if(!$userid) {
?>
        <span>로그인 해주세요</span>
        <a href="login_form.php" class="member">로그인</a>
<?php
    } else {
        $logged = $username."(@".$userid.")님";
?>
        <span><?=$logged?></span>
<?php
        if($userlevel == 1) {
?>
            <a href="admin.php">관리자모드</a>
<?php
        } elseif($userlevel == 9) {
?>
            <a href="bookmark.php" class="bookmark">북마크</a>
<?php
        } else {
            error_log('user level error');
        }
?>
        <a href="logout.php" class="member">로그아웃</a>
<?php
    }
?>
