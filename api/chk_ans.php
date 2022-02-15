<?php
session_start();
// 這裡可以測試 驗證數字是否正確
if($_POST['ans']==$_SESSION['ans']){
    echo 1;
}else{
    echo 0;
}

//echo $_POST['ans']==$_SESSION['ans'];
?>