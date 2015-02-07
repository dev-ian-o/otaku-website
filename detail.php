<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>
	
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
				      <li><a href="#">Home</a></li>
				      <li class="active">Single Item</li>
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
									<img src="assets/img/manuk.jpg" alt="slider detail Otaku Shop">
								  </div>
								  <div class="item">
									<img src="assets/img/manuk.jpg" alt="slider detail Otaku Shop">
								  </div>
								  <div class="item">
									<img src="assets/img/manuk.jpg" alt="slider detail Otaku Shop">
								  </div>
								</div>
								
								<ol class="carousel-indicators">
								  <li data-target="#itemsingle" data-slide-to="0" class="active"><img src="assets/img/manuk.jpg" class="img-responsive" alt="slider detail Otaku Shop"></li>
								  <li data-target="#itemsingle" data-slide-to="1" class=""><img src="assets/img/manuk.jpg" class="img-responsive" alt="slider detail Otaku Shop"></li>
								  <li data-target="#itemsingle" data-slide-to="2" class=""><img src="assets/img/manuk.jpg" class="img-responsive" alt="slider detail Otaku Shop"></li>
								</ol>
							
							</div>
						</div>
						<div class="col-md-7 col-sm-7">
							<h3>Accessories</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis. Sed blandit augue vitae augue scelerisque bibendum. Vivamus sit amet libero turpis, non venenatis urna. In blandit, odio convallis suscipit venenatis, ante ipsum cursus augue.</p>
							<p>Item Code : <span class="label label-black">#2120</span></p>
							<h4>P200</h4>
							<p><a href="#" class="btn btn-black btn-large"><i class="icon-shopping-cart"></i> Order Now</a></p>
						</div>
					</div>

					<!-- begin:tab -->
					<div class="row">
						<div class="col-md-12 product-tabs">
							<ul id="myTab" class="nav nav-tabs">
						      <li class="active"><a href="#info" data-toggle="tab">More Info</a></li>
						      <li class=""><a href="#review" data-toggle="tab">Review</a></li>
						      <li class=""><a href="#related" data-toggle="tab">Related Items</a></li>
						    </ul>
						    <div id="myTabContent" class="tab-content">
						      <div class="tab-pane fade active in" id="info">
								<p>Howdy, I'm in Section 1. Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.
								Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.</p>
						      </div>
						      <div class="tab-pane fade" id="review">
								<p>Howdy, I'm in Section 2. Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.
								Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.</p>
						      </div>
						      <div class="tab-pane fade" id="related">
						        <div class="row">
									<ul class="thumbnails list-unstyled">
									  <li class="col-md-4 col-sm-4">
										<div class="thumbnail">
										  <a href="detail.php"><img src="assets/img/manuk.jpg" class="img-responsive" alt="detail Otaku Shop"></a>
										  <div class="caption-details">
											<h5>Accessories</h5>
											<span class="price">P200</span>
										  </div>
										</div>
									  </li>
									  <li class="col-md-4 col-sm-4">
										<div class="thumbnail">
										  <a href="detail.php"><img src="assets/img/manuk.jpg" class="img-responsive" alt="detail Otaku Shop"></a>
										  <div class="caption-details">
											<h5>Accessories</h5>
											<span class="price">P200</span>
										  </div>
										</div>
									  </li>
									  <li class="col-md-4 col-sm-4">
										<div class="thumbnail">
										  <a href="detail.php"><img src="assets/img/manuk.jpg" class="img-responsive" alt="detail Otaku Shop"></a>
										  <div class="caption-details">
											<h5>Accessories</h5>
											<span class="price">P200</span>
										  </div>
										</div>
									  </li>
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
							<h3>Quick Search</h3>
							<div class="quick-search">
								<h5>Select Category</h5>
								<select name="cat" class="form-control">
									<option value="accessories">Accessories</option>
									<option value="collectibles">Collectibles</option>
									<option value="costumes">Costumes</option>
									<option value="personal-items">Personal Items</option>
									<option value="toys">Toys</option>
								</select>
								<h5>Select Color</h5>
								<select name="cat" class="form-control">
									<option value="Yellow">Yellow</option>
									<option value="Blue">Blue</option>
									<option value="Green">Green</option>
									<option value="Red">Red</option>
									<option value="Orange">Orange</option>
									<option value="Black">Black</option>
									<option value="Grey">Grey</option>
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
										<option value="Yellow">P15</option>
										<option value="Blue">P45</option>
										<option value="Green">P70</option>
										<option value="Red">P125</option>
										<option value="Orange">P200</option>
										<option value="Black">P235</option>
										<option value="Grey">P300</option>
									</select>
								</div>
								<input type="submit" class="btn btn-black btn-block" name="submit" value="Search">
							</div>

							<h3>Categories</h3>
							<ul class="nav nav-pills nav-stacked">
							  <li class="active"><a href="product.php">Accessories</a></li>
							  <li><a href="product.php">Collectibles</a></li>
							  <li><a href="product.php">Costumes</a></li>
							  <li><a href="product.php">Personal Items</a></li>
							  <li><a href="product.php">Toys</a></li>
							</ul>
							
							<h3>Information</h3>
							<ul class="nav nav-pills nav-stacked">
							  <li><a href="confirm.php">Payment Confirmation</a></li>
							  <li><a href="#">Delivery</a></li>
							  <li><a href="#">Secure Payment</a></li>
							  <li><a href="#">Our Stores</a></li>
							  <li><a href="about.php">About Us</a></li>
							  <li><a href="contact.php">Contact Us</a></li>
							  <li><a href="testimoni.php">Testimony</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end:product-sidebar -->
			
			</div>
		</div>
	</div>
<?php  include 'common/footer.php';?>