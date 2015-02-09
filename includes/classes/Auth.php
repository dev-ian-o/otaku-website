<?php

if(substr(dirname(__FILE__), -1) != DIRECTORY_SEPARATOR)
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR .'Base.php');
else
	require_once(dirname(__FILE__) .'Base.php');

class Auth extends Base{
	
	private static $table = "users";

	public static function signIn($row){

		$row['password'] = sha1(md5($row['password']));
		$conn = self::conn();		

		$stmt = $conn->prepare("SELECT * FROM ".self::$table." WHERE email=:email AND password=:password AND deleted_at IS null");

		$stmt->execute(array(
			"email" => $row['email'],
			"password" => $row['password'],
		));

		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		if($row != null){
			session_start();
			$_SESSION['user'] = $row;
			$_SESSION['login'] = "true";
			return json_encode(array("success"=> true));
		}
		else
			return json_encode(array("success"=> false));
		

	}
}

// $row = [
// 	"email" => "ianolinares@ymail.com",
// 	"password" => "passwsord",
// ];

// print_r(Auth::signIn($row));