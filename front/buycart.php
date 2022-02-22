<?php 

// 假如網址列存在
if(isset($_GET["id"]) && isset($_GET['qt'])){
    //則商品回存
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

if(!isset($_SESSION['mem'])){
    to("?do=login");
    exit();
}

// echo "你要購買的商品id 為".$_GET['id'];
// echo "<hr>";
// echo "數量為".$_GET['qt'];
if(empty($_SESSION['cart'])){
    echo "<h1 class='ct'>購物車中無商品</h1>";

}else{
   print_r($_SESSION['cart']);
}
