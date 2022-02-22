<?php
// 這個session_start(); 不要忘記放 bybouhan
session_start();
unset($_SESSION['cart'][$_POST['id']]);

?>