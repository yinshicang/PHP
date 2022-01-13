<?php
  
   $conn=mysqli_connect("localhost","root","","mydb");
   $result=mysqli_query($conn, "select * from user");
   
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "welcome!!";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//自動跳轉
   }

  else{
    echo "id/pwd wrong!!";
    echo "<meta http-equiv=REFRESH content='3, url=3-0.login.html'>";//自動跳轉(登入畫面)
  }
?>