<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=3-0.login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from bulletin where bid='{$_GET['bid']}'";
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=20.bulletin.php'>";
    }
?>