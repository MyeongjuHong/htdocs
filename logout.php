<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["userlevel"]);

    echo("
        <script>
            window.alert('로그아웃 완료!');
            location.href = 'index.php';
        </script>
    ");
?>