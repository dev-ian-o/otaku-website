<?php

if(substr(dirname(__FILE__), -1) != DIRECTORY_SEPARATOR)
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR .'Base.php');
else
	require_once(dirname(__FILE__) .'Base.php');

class Cart extends Base{
	
	private static $table = "cart";


	public static function add($row){

		$conn = self::conn();

		$stmt = $conn->prepare("INSERT INTO 
			".self::$table." (`user_id`, `shipping_address`, `total`, `note`,`date`  `created_at`) 
			VALUES (:user_id, :shipping_address, :total, :note, now(), now());");

		$stmt->execute(array(
			"user_id" => $row['user_id'],
			"shipping_address" => $row['shipping_address'],
			"total" => $row['total'],
			"note" => $row['note'],
		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode(array("success"=> true));
	}


	public static function edit($row){
		//extend the row array to fetch
		$conn = self::conn();

		// $row['image'] = self::add_photo($row["files"]);
		
		$stmt = $conn->prepare("UPDATE ".self::$table." 
			SET	email = :email,
				firstname = :firstname,
				lastname = :lastname,
				password = :password,
				updated_at = now()
			WHERE user_id = :id");

		$stmt->execute(array(
			"email" => $row['email'],
			"firstname" => $row['firstname'],
			"lastname" => $row['lastname'],
			"password" => $row['password'],
			// "image" => $row['password'],
			"id" => $row['user_id'],
		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode(array("success"=> true));
	}

	public static function delete($id){

		$conn = self::conn();

		$stmt = $conn->prepare("UPDATE ".self::$table." 
			SET deleted_at = now()
			WHERE user_id = :id");

		$stmt->execute(array(
			"id" => $id,
		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);	

		return json_encode(array("success"=> true));	
	
	}

	public static function fetch(){	

		$conn = self::conn();

		$stmt = $conn->prepare("SELECT * FROM ".self::$table." WHERE deleted_at IS NULL");

		$stmt->execute(array(

		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode($row);
	}

	public static function findById($id){

		$conn = self::conn();

		$stmt = $conn->prepare("SELECT * FROM ".self::$table." WHERE user_id = :id AND deleted_at IS NULL");

		$stmt->execute(array(
			"id" => $id
		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode($row);			
	}

}

// $row = [
// 	"email" => "ianolinares@ymail.com",
// 	"firstname" => "Ian",
// 	"lastname" => "Olinares",
// 	"password" => "password",
// 	// "user_id" => "1"
// ];

// $id = 1;
// print_r(Users::add($row));
// // print_r($db->add("s"));
// // Database::conn();