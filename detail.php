<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>
	<?php 
		if(isset($_GET['id']))
			$product = json_decode(Products::findById($_GET['id']));
		else
			$product = json_decode(Products::findById(1));

	?>
	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span> Single Item</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- end:heading -->
	
	<!-- begin:content -->
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
				      <li><a href="index.php">Home</a></li>
				      <li class="active"><?= ucwords($product[0]->category); ?></li>
				    </ol>
				</div>
			</div>
			
			<div class="row">
				<!-- begin:product-content -->
				<div class="col-md-9 col-sm-9 single-item">
					<div class="row">
						<div class="col-md-5 col-sm-5">
							<div id="itemsingle" class="carousel slide clearfix">
							
								<div class="carousel-inner">
								  <div class="item active">
									<img src="images/<?= $product[0]->image; ?>" alt="slider detail Otaku Shop">
								  </div>
								</div>
							
							</div>
						</div>
						<div class="col-md-7 col-sm-7">
							<h3><?= ucwords($product[0]->product_name); ?></h3>
							<p><?= $product[0]->product_desc; ?></p>
							<p>Item Category : <span class="label label-black"><?= ucwords($product[0]->category); ?></span></p>
							<h4>P<?= $product[0]->price; ?></h4>
							<form id="add-product">
							<input type="hidden" name="product_id" value="<?= $product[0]->product_id; ?>">
							<input type="hidden" name="cart" value="cart">
							<p><button type="submit" name="submit" class="btn btn-black btn-large"><i class="fa fa-shopping-cart"></i> Add to cart</button></p>
							</form>
						</div>
					</div>

					<!-- begin:tab -->
					<div class="row">
						<div class="col-md-12 product-tabs">
							<ul id="myTab" class="nav nav-tabs">
						      <li class="active"><a href="#info" data-toggle="tab">More Info</a></li>
						      <li class=""><a href="#related" data-toggle="tab">Related Items</a></li>
						    </ul>
						    <div id="myTabContent" class="tab-content">
						      <div class="tab-pane fade active in" id="info">
								<p><?= $product[0]->product_desc; ?></p>
						      </div>
						      <div class="tab-pane fade" id="related">
						        <div class="row">
									<ul class="thumbnails list-unstyled">
									<?php $related_products = json_decode(Products::findByCategory($product[0]->category));?>
									<?php foreach ($related_products as $key => $value):?>
										<li class="col-md-4 col-sm-4">
											<div class="thumbnail">
												<a href="detail.php?id=<?= $value->product_id;?>"><img src="images/<?= $value->image;?>" class="img-responsive" alt="detail Otaku Shop"></a>
												<div class="caption-details">
													<h6><?= $value->product_name;?></h6>
													<span class="price">P<?= $value->price;?></span>
												</div>
										</div>
										</li>
									<?php endforeach;?>
									</ul>
								</div>
						      </div>
						    </div>

						</div>
					</div>
					<!-- end:tab -->
				</div>
				<!-- end:product-content -->
				
				<!-- begin:product-sidebar -->
				<div class="col-md-3 col-sm-3">
					<div class="row sidebar">
						<div class="col-md-12">
							<!-- <h3>Quick Search</h3>
							<div class="quick-search">
								<h5>Select Category</h5>
								<select name="cat" class="form-control">
									<option value="accessories">Accessories</option>
									<option value="collectibles">Collectibles</option>
									<option value="costumes">Costumes</option>
									<option value="toys">Toys</option>
									<option value="magazines">magazines</option>
								</select>
								<h5>Select Min - Max Price</h5>
								<div class="col-md-6">
									<select name="cat" class="form-control">
										<option value="Yellow">P10</option>
										<option value="Blue">P45</option>
										<option value="Green">P70</option>
										<option value="Red">P125</option>
										<option value="Orange">P200</option>
										<option value="Black">P235</option>
										<option value="Grey">P300</option>
									</select>
								</div>
								<div class="col-md-6">
									<select name="cat" class="form-control">
										<option value="Yellow">P400</option>
										<option value="Blue">P500</option>
										<option value="Green">P600</option>
										<option value="Red">P700</option>
										<option value="Orange">P800</option>
										<option value="Black">P900</option>
										<option value="Grey">P1000+</option>
									</select>
								</div>
								<input type="submit" class="btn btn-black btn-block" name="submit" value="Search">
							</div> -->

							<h3>Categories</h3>
							<ul class="nav nav-pills nav-stacked">
							  <li<?php if($product[0]->category === "accessories"):?> class="active"<?php endif;?>><a href="product.php?category=accessories">Accessories</a></li>
							  <li <?php if($product[0]->category === "collectibles"):?> class="active"<?php endif;?>><a href="product.php?category=collectibles">Collectibles</a></li>
							  <li <?php if($product[0]->category === "costumes"):?> class="active"<?php endif;?>><a href="product.php?category=costumes">Costumes</a></li>
							  <li <?php if($product[0]->category === "toy"):?> class="active"<?php endif;?>><a href="product.php?category=toy">Toys</a></li>
							  <li <?php if($product[0]->category === "magazine"):?> class="active"<?php endif;?>><a href="product.php?category=magazine">Magazines</a></li>
							</ul>
							
							<h3>Information</h3>
							<ul class="nav nav-pills nav-stacked">
							  <!-- <li><a href="confirm.php">Payment Confirmation</a></li> -->
							  <li><a href="about.php">About Us</a></li>
							  <li><a href="contact.php">Contact Us</a></li>
							  <!-- <li><a href="testimoni.php">Testimony</a></li> -->
							</ul>
						</div>
					</div>
				</div>
				<!-- end:product-sidebar -->
			
			</div>
		</div>
	</div>
<?php  include 'common/footer.php';?>