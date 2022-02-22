<?php 

$g=$Goods->find($_GET['id']);

echo "<h1 class='ct'>{$g['name']}</h1>";
?>

<div class="all">
<div class="pp" style=width:66%>
<img src="img/<?=$g['img'];?>" alt="">
</div>

<div class="pp" style="width:33%">
<div>分類:</div>
<div style="border-bottom 2px">編號:<?=$g['no'];?></div>
<div>分類:</div>
<div>分類:</div>
<div>分類:</div>

</div>

<div class="tt ct all">
購買數量: <input type="number">
<img src="" onclick= alt="">


</div>

<!-- $g['id'] 會帶出商品id -->