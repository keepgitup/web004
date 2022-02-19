<h1>第一次購物</h1>
<a href="?do=reg"><img src="icon/0413.jpg" alt=""></a>
<h1>會員登入</h1>

<!--table.all>tr*3>td.tt.ct+td.pp -->
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
 <?php
 $a=rand(10,99);
 $b=rand(10,99);
 $_SESSION['ans']=$a+$b;
 echo $a . " + " . $b . " = ";

 ?>
<input type="text" name="ans" id="ans">
</td>
</tr>
</table>
<!--  -->
<div class="ct"><button onclick="login()">確認</button></div>

<script>
function login(){
    // 連 資data 回
    $.post("api/chk_ans.php",
           {ans:$("#ans").val()},
           (chk)=>{
            //加入parseInt()是為了確保資料型態一致。
            if(parseInt(chk)==1){

                //檢查帳號密碼用的js程式

            }else{
                alert("對不起，您輸入的驗證碼有誤請您重新登入")
            }
    })
}