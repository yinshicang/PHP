<?php
   $conn=mysqli_connect("localhost","root","","mydb");
   $result=mysqli_query($conn, "select * from user");
  
   //while迴圈
   while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } //印出result的帳號，下一筆下一筆....
?>