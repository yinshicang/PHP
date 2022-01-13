<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "Welcome";//$_POST用來預定義來自 method="post" 的表單中的值。
    else
        echo "fail login";
?>