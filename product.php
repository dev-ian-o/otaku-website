<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>
	
	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span> Products</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- end:heading -->
	
	<!-- begin:product -->
	<div id="catalogue">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
				      <li><a href="index.php">Home</a></li>
				      <li><a href="product.php">Products</a></li>
				      <?php if(isset($_GET['category'])):?>
				      <li class="active"><?= ucwords($_GET['category']); ?></li>
				      <?php else:?>
				      <li class="active">All</li>				      
					  <?php endif;?>

				    </ol>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<h2>Products</h2>
					<?php if(isset($_GET['category'])):?>
					<?php $products = json_decode(Products::findByCategory($_GET['category']));?>
					<h5><?= ucwords($_GET['category']); ?></h5>
					<?php else:?>
					<h5>All</h5>				      
					<?php $products = json_decode(Products::fetch());?>
					<?php endif;?>

<!-- 					<ul class="thumbnails">
					  <li class="col-md-3 col-sm-3">
						<div class="thumbnail">
						  <a href="detail.php"><img src="assets/img/manuk.jpg" class="img-responsive" alt="product Otaku Shop" /></a>
						  <div class="caption-details">
							<h3>Accessories</h3>
							<span class="price">P200</span>
						  </div>
						</div>
					  </li>
					</ul> -->

					<div class="row">
						<?php foreach ($products as $key => $value):?>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="thumbnail">
							  <div class="caption-img" style="background: url(images/<?= $value->image; ?>);"></div>
							  <div class="caption-details">
								<h5><?= $value->product_name; ?></h5>
								<span class="price">P<?= $value->price; ?></span>
							  </div>
							  <a href="detail.php?id=<?= $value->product_id; ?>"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
							</div>
						</div>
						<?php endforeach;?>
					</div>

<!-- 					<ul class="pagination">
			            <li class="disabled"><a href="#">Page 1 of 2</a></li>
			            <li class="disabled"><a href="#">&laquo;</a></li>
			            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			            <li><a href="#">2</a></li>
			            <li><a href="#">3</a></li>
			            <li><a href="#">4</a></li>
			            <li><a href="#">5</a></li>
			            <li><a href="#">&raquo;</a></li>
			        </ul> -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- end:product -->
<?php  include 'common/footer.php';?>