<!-- 這裡20行拿20分 一般是表單送到api 這裡是為方便-->
<!-- 因為要當前頁面 -->

<?php
if(isset($_POST['bottom'])){
    $Bot->save(['id'=>1,
                'bottom'=>$_POST['bottom']]);
}
?>
<h1 class='ct'>編輯頁尾版權區</h1>
<form action="?do=bot" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp"><input type="text" name="bottom" value="<?=$Bot->find(1)['bottom'];?>"></td>

        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>
<!-- 現在再幹嘛?  $rows=$Admin->all() 意思就是要用rows去存 Admin去要得全部資料 -->
<!-- 用strLeng來顯示密碼 -->
<!-- 如果不是admin 才會把button show出來給user看 -->
<!-- location.href=?do=edit_admin&id=<=$row['id']; -->