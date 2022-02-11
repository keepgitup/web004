<!-- 這裡可以測試 驗證數字是否正確 -->
<?php
session_start();

if($_POST['ans']==$_SESSION['ans']){
    echo 1;
}else{
    echo 0;
}







//echo $_POST['ans']==$_SESSION['ans'];
?>


<!--136 

chkpw $db=new DB($_POST['table'])
送進來的資料表做比對 再存到$db
-->