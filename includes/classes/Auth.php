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

	public static function checkPassword($row){
		$row['old_password'] = sha1(md5($row['old_password']));
		$conn = self::conn();		

		$stmt = $conn->prepare("SELECT * FROM ".self::$table." WHERE email=:email AND password=:password AND deleted_at IS null");

		$stmt->execute(array(
			"email" => $row['email'],
			"password" => $row['old_password'],
		));

		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode($row);
	}

	public static function changePassword($row){
		$row['password'] = sha1(md5($row['password']));
		$conn = self::conn();		

		$stmt = $conn->prepare("UPDATE ".self::$table." 
			SET	password = :password,
				updated_at = now()
			WHERE user_id = :id");

		$stmt->execute(array(
			"password" => $row['password'],
			"id" => $row['user_id'],
		));

		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		if($row != null){
			return json_encode(array("success"=> true));
		}
		else
			return json_encode(array("success"=> false));
	}

	public static function changeProfile($row){
		$conn = self::conn();		

		$stmt = $conn->prepare("UPDATE ".self::$table." 
			SET	firstname = :firstname,
				lastname = :lastname,
				updated_at = now()
			WHERE user_id = :id");

		$stmt->execute(array(
			"lastname" => $row['lastname'],
			"firstname" => $row['firstname'],
			"id" => $row['user_id'],
		));

		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode(array("success"=> true));
	}
}

// $row = [
// 	"email" => "ianolinares@ymail.com",
// 	"password" => "passwsord",
// ];

// print_r(Auth::signIn($row));