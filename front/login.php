<h1>第一次購物</h1>
<a href="?do=reg"><img src="icon/0413.jpg" alt=""></a>
<h1>會員登入</h1>

<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp"><input type="text" name="ans" id="ans"></td>
    </tr>
</table>
<!-- 這裡用Ajax做確認比較快 -->
<div class="ct"><button onclick="login">確認</button></div>

<script>
function login(){
    $.post("api/chk_ans.php",{ans:$("#ans").val()},(chk)=>{
        if(parseInt(chk)){
            console.log("答對了")
        }else{
            alert("對不起，您輸入的驗證碼有誤請您重新登入")
        }
    })
}


</script>

