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
<div class="ct"><button onclick="login()">確認</button></div>


>
<!-- 最上面要記得 include_once "base.php" -->
<!-- 20
用session 存到資料庫去
-->
<!-- session可以看到數字會跟著改 -->
<!-- 從jquery上拿到得值 一定是 字串 -->