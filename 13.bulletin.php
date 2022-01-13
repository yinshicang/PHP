<?php
    error_reporting(0);//報告運行時錯誤
    session_start();//一定要放在還沒有輸出之前，跟cookie很像
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=3-0.login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>][<a href=14-1.user_add_form.php>新增使用者</a>][<a href=15.user.php>管理使用者</a>]<br>";
        $conn=mysqli_connect("localhost","root","", "mydb");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
