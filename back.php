<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./Manage Page_files/css.css" rel="stylesheet" type="text/css">
<script src="./Manage Page_files/js.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
		<div id="top">
        	<a href="back.php">
            	<img src="./Manage Page_files/0416.jpg">
            </a>
                            <img src="./Manage Page_files/0417.jpg">
                   </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
        	            	<a href="?do=admin">管理權限設置</a>
            	            	<a href="?do=th">商品分類與管理</a>
            	            	<a href="?do=order">訂單管理</a>
            	            	<a href="?do=mem">會員管理</a>
            	            	<a href="?do=bot">頁尾版權管理</a>
            	            	<a href="?do=news">最新消息管理</a>
            	        	<a href="?do=adm=logout" style="color:#f00;">登出</a>
                    </div>
                    </div>
        <div id="right">
		<?php

$do=$_GET["do"]??'main';
$file='front/'.$do.".php";
if(file_exists($file)){
		include $file;
// 如果沒main檔案 那肯定會有錯誤
}else{
		//echo "檔案不存在";
		include "back/admin.php";
}
?>
        	        </div>
        <div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
        	頁尾版權 :        </div>
    </div>

</body></html>