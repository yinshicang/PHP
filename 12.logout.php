<?php
    session_start();//紀錄
    unset($_SESSION["id"]);//清除
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=3-0.login.html'>";

?>