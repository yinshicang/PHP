<?php
  //連結3-0.login.html

   $conn=mysqli_connect("localhost","root","","mydb");
   $result=mysqli_query($conn, "select * from user");

   $login=FALSE;//先設定是錯誤的
   //迴圈
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;//如果帳密一樣就變對的(mydb有兩個帳密)
     }
   }
   
   
  if ($login==TRUE)
     echo "welcome!!";
  else
     echo "id/pwd wrong!!";
?>