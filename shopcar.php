<?php 
	session_start();
	if(isset($_SESSION['cars'])){
		if(in_array($_POST['p_id'], $_SESSION['cars'])){
			header ('Content-type: text/html; charset=utf-8');
			die("<a href=javascript:history.back(-1)>商品已在購物車內</a>");
		}
	}
	$_SESSION['cars'][] = $_POST['p_id'];
	$_SESSION['name'][] = $_POST['p_name'];
	$_SESSION['price'][] = $_POST['p_price'];
	$_SESSION['quantity'][] = 1;
	header("Location:shopping.php");  
?>