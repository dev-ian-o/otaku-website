
<?php
require_once('../classes/Auth.php');
require_once('../classes/Users.php');
require_once('../classes/Products.php');

if(isset($_POST['login']))
{
	print_r(Auth::signIn($_POST));
}

if(isset($_POST['signup']))
{
	print_r(Users::add($_POST));
}

if(isset($_POST['cart']))
{
	session_start();


	$row = json_decode(Products::findById($_POST['product_id']));
	$row = (array) $row[0];

	if(!isset($_SESSION['cart']))
		$_SESSION['cart'][$_POST['product_id']] = array($row);

	$a = 0;

	foreach ($_SESSION['cart'] as $key => $value) {
		if($value['product_id'] ==  $_POST['product_id']){
			print_r(json_encode(array("success"=>false)));
			$a = 1;
			break;
		}
	}

	if($a === 0){

		if(isset($_SESSION['cart']))
			$_SESSION['cart'][$_POST['product_id']] =  $row;
		else
			$_SESSION['cart'][$_POST['product_id']] = $row;

		$_SESSION['cart_counter'] = sizeof($_SESSION['cart']);		

		print_r(json_encode(array("success"=>true,"cart_size"=>sizeof($_SESSION['cart']))));
	}
	// $_SESSION['cart'] = [];
	// print_r(json_encode($_SESSION['cart']));
}

if(isset($_POST['remove_cart']))
{
	
	session_start();
	unset($_SESSION['cart'][$_POST['product_id']]);	
	print_r(json_encode(array("success"=>true,"cart_size"=>sizeof($_SESSION['cart']))));	
}