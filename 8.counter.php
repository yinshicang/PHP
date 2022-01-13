<?php
    session_start();//與 Cookie 很類似,儲存
    if (!isset($_SESSION["counter"]))//用於檢測是否已設置且非 NULL。+!=是0
        $_SESSION["counter"]=1;//一開始counter
    else//counter不是0
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
                //連結重啟到9.reset counter.php
?>