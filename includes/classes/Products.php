<?php

if(substr(dirname(__FILE__), -1) != DIRECTORY_SEPARATOR)
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR .'Base.php');
else
	require_once(dirname(__FILE__) .'Base.php');

class Products extends Base{
	
	private static $table = "products";
	public static function truncate(){
	// $row['image'] = self::add_photo($row["files"]);

	$conn = self::conn();

	$stmt = $conn->prepare("TRUNCATE ".self::$table);

	$stmt->execute(array(
	));
	
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

	return json_encode(array("success"=> true));
}

	public static function add($row){
		// $row['image'] = self::add_photo($row["files"]);

		$conn = self::conn();

		$stmt = $conn->prepare("INSERT INTO 
			".self::$table." (`product_name`,`product_desc`,`category`,`price`,`quantity`,`image`, `created_at`) 
			VALUES (:product_name, :product_desc, :category, :price, :quantity, :image, now())");

		$stmt->execute(array(
			"product_name" => $row['product_name'],
			"product_desc" => $row['product_desc'],
			"category" => $row['category'],
			"price" => $row['price'],
			"quantity" => $row['quantity'],
			"image" => $row['image'],
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

		$stmt = $conn->prepare("SELECT * FROM ".self::$table." WHERE product_id = :id AND deleted_at IS NULL");

		$stmt->execute(array(
			"id" => $id
		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode($row);			
	}

	public static function findByCategory($category){

		$conn = self::conn();

		$stmt = $conn->prepare("SELECT * FROM ".self::$table." WHERE category = :category AND deleted_at IS NULL");

		$stmt->execute(array(
			"category" => $category
		));
		
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		return json_encode($row);			
	}

}
// Fairy Tail Metal Bracelet: 275
// One Piece Black Rotating Ring: 200
// Radiant Dreamer: 250
// Scouting Legion Ring: 300
// Shingeki No Kyojin Necklace: 350
$row = [
	["product_name" => "Fairy Tail Metal Bracelet",
		"product_desc" => "Very nice!",
		"category" => "accessories",
		"price" => "275",
		"quantity" => "100",
		"image" => "products/accessories/fairy_tail_metal_bracelet.jpg",],


	["product_name" => "One Piece Black Rotating Ring",
		"product_desc" => "Very Elegant!",
		"category" => "accessories",
		"price" => "200",
		"quantity" => "100",
		"image" => "products/accessories/one_piece_black_rotating_ring.jpg",],


	["product_name" => "Radiant Dreamer",
		"product_desc" => "Very Beautiful!",
		"category" => "accessories",
		"price" => "250",
		"quantity" => "100",
		"image" => "products/accessories/radiant_dreamer.jpg",],

	["product_name" => "Scouting Legion Ring",
		"product_desc" => "Good!",
		"category" => "accessories",
		"price" => "300",
		"quantity" => "100",
		"image" => "products/accessories/scouting_legion_ring.jpg",],

	["product_name" => "Shingeki No Kyojin Necklace",
		"product_desc" => "Nice!",
		"category" => "accessories",
		"price" => "350",
		"quantity" => "100",
		"image" => "products/accessories/shingeki_no_kyojin_necklace.jpg",],




	["product_name" => "Costume 1",
		"product_desc" => "Nice!",
		"category" => "costumes",
		"price" => "1899",
		"quantity" => "100",
		"image" => "products/costumes/costume1.jpg",],
	["product_name" => "Costume 2",
		"product_desc" => "Nice!",
		"category" => "costumes",
		"price" => "1599",
		"quantity" => "100",
		"image" => "products/costumes/costume2.jpg",],
	["product_name" => "Costume 3",
		"product_desc" => "Nice!",
		"category" => "costumes",
		"price" => "1799",
		"quantity" => "100",
		"image" => "products/costumes/costume3.jpg",],
	["product_name" => "Costume 4",
		"product_desc" => "Nice!",
		"category" => "costumes",
		"price" => "1399",
		"quantity" => "100",
		"image" => "products/costumes/costume4.png",],
	["product_name" => "Costume 5",
		"product_desc" => "Nice!",
		"category" => "costumes",
		"price" => "1499",
		"quantity" => "100",
		"image" => "products/costumes/costume5.jpg",],


	["product_name" => "Magazine 1",
		"product_desc" => "Nice!",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/magazine1.jpg",],
	["product_name" => "Magazine 2",
		"product_desc" => "Nice!",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/magazine2.jpg",],
	["product_name" => "Magazine 3",
		"product_desc" => "Nice!",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/magazine3.jpg",],
	["product_name" => "Magazine 4",
		"product_desc" => "Nice!",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/magazine4.jpg",],
	["product_name" => "Magazine 5",
		"product_desc" => "Nice!",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/magazine5.jpg",],


	["product_name" => "Toy 1",
		"product_desc" => "Nice!",
		"category" => "toy",
		"price" => "480",
		"quantity" => "100",
		"image" => "products/toys/toy1.jpg",],
	["product_name" => "Toy 2",
		"product_desc" => "Nice!",
		"category" => "toy",
		"price" => "480",
		"quantity" => "100",
		"image" => "products/toys/toy2.jpg",],
	["product_name" => "Toy 3",
		"product_desc" => "Nice!",
		"category" => "toy",
		"price" => "480",
		"quantity" => "100",
		"image" => "products/toys/toy3.jpg",],
	["product_name" => "Toy 4",
		"product_desc" => "Nice!",
		"category" => "toy",
		"price" => "480",
		"quantity" => "100",
		"image" => "products/toys/toy4.jpg",],
	["product_name" => "Toy 5",
		"product_desc" => "Nice!",
		"category" => "toy",
		"price" => "480",
		"quantity" => "100",
		"image" => "products/toys/toy5.jpg",],



	["product_name" => "Collectible 1",
		"product_desc" => "Nice!",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "100",
		"image" => "products/collectibles/collectible1.jpg",],
	["product_name" => "Collectible 2",
		"product_desc" => "Nice!",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "100",
		"image" => "products/collectibles/collectible2.jpg",],
	["product_name" => "Collectible 3",
		"product_desc" => "Nice!",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "100",
		"image" => "products/collectibles/collectible3.jpg",],
	["product_name" => "Collectible 4",
		"product_desc" => "Nice!",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "100",
		"image" => "products/collectibles/collectible4.jpg",],
	["product_name" => "Collectible 5",
		"product_desc" => "Nice!",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "100",
		"image" => "products/collectibles/collectible5.jpg",],


];

// $id = 1;
// Products::truncate();
// foreach ($row as $key => $value) {

// 	print_r(Products::add($value));	
// }



// // print_r($db->add("s"));
// // Database::conn();

// $path = "c:/xampp/htdocs/otaku/images/products/accessories";

// // $name = strtolower(str_replace(' ', '_', $name));
// // rename("../picture.jpg", "old.jpg");


// foreach(glob($path.'/*') as $file) {

// 	$new_name = strtolower(str_replace(' ', '_', $file));
// 	$new_name = array_pop(explode("/",$new_name));
// 	rename($file, $new_name);
//     print_r($new_name."<br>");

// }