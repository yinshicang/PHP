<?php
    
    $conn = mysqli_connect("localhost", "root", "", "mydb");//mysqli_connect() 建立資料庫連結
    //(指定主機名或IP地址 本地服務器用localhost,指定用戶名 本地服務器用戶名是root,指定密碼,數據庫名稱)

    $result=mysqli_query($conn, "select * from user");//mysqli_query() 從資料庫查詢資料
    //從$conn資料庫裡選擇來自user的資料。

    $row=mysqli_fetch_array($result);//mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    //從$result選擇的資料。

    echo $row["id"] . " " . $row["pwd"];
    echo "<br>"; 
    echo $row["id"] . " " . $row["pwd"]; 
    //印出result的帳號，第一筆第一筆....
?>