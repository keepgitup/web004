<h1 class="ct">管理登入</h1>

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
<div class="ct"><button onclick="login()">確認</button></div>

<script>
function login(){
    $.post("api/chk_ans.php",{ans:$("#ans").val()},(chk)=>{
        if(parseInt(chk)){
            $.post("api/chk_pw.php",
                   {table:'admin',acc:$("#acc").val(),pw:$("#pw").val()},
                   (res)=>{
                        if(parseInt(res)){
                            location.href="back.php";
                        }else{
                            alert("帳號或密碼錯誤")
                        }
                    })
        }else{
            alert("對不起，您輸入的驗證碼有誤請您重新登入")
        }
    })
}


</script>
<!-- 最上面要記得 include_once "base.php" -->
<!-- 20
用session 存到資料庫去
-->
<!-- session可以看到數字會跟著改 -->
<!-- 從jquery上拿到得值 一定是 字串 -->

<!-- 這裡用Ajax做確認比較快 -->