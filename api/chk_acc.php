<!-- 第4題的api都可以只有一行 看怎麼寫 -->
<!-- 有需要生成 $Mem=new DB..放在base -->
<?php include_once "../base.php";

$chk=$Mem->math('count','*',['acc'=>$_POST['acc']]);
if($chk){
    echo 1;
}else{
    echo 0;
}




//echo $Mem->math('count','*',['acc'=>$_POST['acc']]);
