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




	["product_name" => "Hisagi Shuuhei",
		"product_desc" => "Bleach Hisagi Shuuhei Cosplaycostume",
		"category" => "costumes",
		"price" => "1899",
		"quantity" => "100",
		"image" => "products/costumes/bleach-hisagi-shuuhei-cosplaycostume2.jpg",],
	["product_name" => "Karakura",
		"product_desc" => "Bleach Karakura High School Girl's School Uniform costume",
		"category" => "costumes",
		"price" => "1599",
		"quantity" => "100",
		"image" => "products/costumes/bleach-karakura-high-school-girls-school-uniform-costume4.png",],
	["product_name" => "Dragon Ball",
		"product_desc" => "Dragon Ball Kame Hame Practising Clothing Cosplaycostume",
		"category" => "costumes",
		"price" => "1799",
		"quantity" => "100",
		"image" => "products/costumes/dragon-ball-kame-hame-practising-clothing-cosplaycostume3.jpg",],
	["product_name" => "Kagome",
		"product_desc" => "InuYasha Feudal Fairy Tale Kagome Higurashi costume5",
		"category" => "costumes",
		"price" => "1399",
		"quantity" => "100",
		"image" => "products/costumes/inuyasha-feudal-fairy-tale-kagome-higurashi-costume5.jpg",],
	["product_name" => "Kurosu Yuuki",
		"product_desc" => "Vampire Knight Day Class Girl Kurosu Yuuki Cosplay Costume",
		"category" => "costumes",
		"price" => "1499",
		"quantity" => "100",
		"image" => "products/costumes/vampire-knight-day-class-girl-kurosu-yuuki-cosplay-costumecostume1.jpg",],


	["product_name" => "Attack on Titan",
		"product_desc" => "Attack on Titan magazine",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/aatck-on-titan-magazine1.jpg",],
	["product_name" => "Anime",
		"product_desc" => "Anmie Magazine.",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/anime-magazine2.jpg",],
	["product_name" => "Otakuzine 1",
		"product_desc" => "Otakuzine magazine",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/otakuzine-magazine3.jpg",],
	["product_name" => "otakuzine 2",
		"product_desc" => "Otakuzine magazine.",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/otakuzine-magazine5.jpg",],
	["product_name" => "Fairy Tail Magazine",
		"product_desc" => "Fairy Tail",
		"category" => "magazine",
		"price" => "500",
		"quantity" => "100",
		"image" => "products/magazines/fairy-tail-magazine4.jpg",],


	["product_name" => "Dancing King Brook",
		"product_desc" => "Dancing King Brook of one piece.",
		"category" => "toy",
		"price" => "450",
		"quantity" => "100",
		"image" => "products/toys/dancing-king-brook.jpg",],
	["product_name" => "Kakashi Hatake",
		"product_desc" => "Kakashi Hatake of naruto.",
		"category" => "toy",
		"price" => "480",
		"quantity" => "100",
		"image" => "products/toys/kakashi-hatake.jpg",],
	["product_name" => "Nightmare Luffy",
		"product_desc" => "Nightmare Luffy of One Piece.",
		"category" => "toy",
		"price" => "550",
		"quantity" => "100",
		"image" => "products/toys/nightmare-luffy.jpg",],
	["product_name" => "Shanks",
		"product_desc" => "Shanks of One Piece.",
		"category" => "toy",
		"price" => "450",
		"quantity" => "100",
		"image" => "products/toys/shanks.jpg",],
	["product_name" => "Trafalgar",
		"product_desc" => "Trafalgar of One Piece.",
		"category" => "toy",
		"price" => "450",
		"quantity" => "100",
		"image" => "products/toys/trafalgar.jpg",],



	["product_name" => "Naruto 1",
		"product_desc" => "Naruto collectibles",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "100",
		"image" => "products/collectibles/naruto-collectible1.jpg",],
	["product_name" => "Naruto 2",
		"product_desc" => "naruto collectibles",
		"category" => "collectibles",
		"price" => "900",
		"quantity" => "100",
		"image" => "products/collectibles/naruto-collectible2.jpg",],
	["product_name" => "Lucy of fairy tail",
		"product_desc" => "Lucy of fairy tail collectible",
		"category" => "collectibles",
		"price" => "300",
		"quantity" => "100",
		"image" => "products/collectibles/lucy-fairy-tail-collectible3.jpg",],
	["product_name" => "D Grey Man",
		"product_desc" => "D Grey Man collectibles",
		"category" => "collectibles",
		"price" => "1100",
		"quantity" => "100",
		"image" => "products/collectibles/d-grey-man-collectible4.jpg",],
	["product_name" => "Oone piece",
		"product_desc" => "One Piece collectibles",
		"category" => "collectibles",
		"price" => "700",
		"quantity" => "1500",
		"image" => "products/collectibles/one-piece-collectible5.jpg",],


	["product_name" => "Multi Color Beautiful Lolita Wig",
		"product_desc" => "60cm-Long-Multi-Color-Beautiful-lolita-wig-Anime-Wig",
		"category" => "wigs",
		"price" => "1400",
		"quantity" => "100",
		"image" => "products/wigs/60cm-long-multi-color-beautiful-lolita-wig-anime-wig.jpg",],
	["product_name" => "Charm Punk Rock Wig",
		"product_desc" => "75cm Charm punk rock Blue-white Short inlay Long Tress Cosplay Wig Anime",
		"category" => "wigs",
		"price" => "1800",
		"quantity" => "100",
		"image" => "products/wigs/75cm-charm-punk-rock-blue-white-short-inlay-long-tress-cosplay-wig-anime.jpg",],
	["product_name" => "Silk tower gold wig",
		"product_desc" => "100cm long umineko no naku koro ni thank silk tower gold",
		"category" => "wigs",
		"price" => "2300",
		"quantity" => "100",
		"image" => "products/wigs/100cm-long-umineko-no-naku-koro-ni-thank-silk-tower-gold.jpg",],
	["product_name"=> "Magic Flute Magi Moerjianuo Wig",
		"product_desc" => "Nice!",
		"category" => "wigs",
		"price" => "1200",
		"quantity" => "100",
		"image" => "products/wigs/magic-flute-magi-moerjianuo-wig.jpg",],
	["product_name" => "silvery comb ming anna sesshoumaru hair wig",
		"product_desc" => "silvery comb ming anna sesshoumaru 100cm long straight hair wig",
		"category" => "wigs",
		"price" => "2400",
		"quantity" => "100",
		"image" => "products/wigs/silvery-comb-ming-anna-sesshoumaru-100cm-long-straight-hair-wig.jpg",],


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