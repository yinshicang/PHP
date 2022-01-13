<?php
    session_start();
    unset($_SESSION["counter"]);//移除值，清除後並不會回傳任何結果
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
    //在載入??秒後，自動跳轉
    //不加url定時刷新頁面
?>