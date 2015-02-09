<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>
	
	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span> cart</h2>
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
				      <li class="active">Cart</li>
				    </ol>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center">
					<table class="table table-responsive">
						<thead>
							<t>
								<td>#</td>
								<td>Product</td>
								<td>Quantity</td>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<?php $a = 1;?>
							<?php if (isset($_SESSION['cart'])): ?>

								<?php if (!sizeof($_SESSION['cart']) == 0): ?>
								<?php foreach($_SESSION['cart'] as $key => $value):?>
									<tr>	
										<td><?= $a++; ?></td>
										<td><?= $value['product_name']; ?> <b>(P<?= $value['price']; ?>)</b></td>
										<td><input type="number" type="form-control" min="1" value="<?= $value['qty']; ?>" maxlength="P<?= $value['quantity']; ?>"></td>
										<td>
										<ul class="list-inline">
										  <li><form class="remove-cart">
												<input type="hidden" name="product_id" value="<?= $value['product_id']; ?>">
												<input type="hidden" name="remove_cart" value="remove_cart">
												<button type="submit" class="btn btn-black">Remove</button>
											</form></li>
										  <li><form class="update-cart">
												<input type="hidden" name="product_id" value="<?= $value['product_id']; ?>">
												<input type="hidden" name="qty" value="<?= $value['qty']; ?>">
												<input type="hidden" name="update_cart" value="update_cart">
												<button type="submit" class="btn btn-black">Update</button>
											</form></li>
										</ul>
											

										</td>
									</tr>
								<?php endforeach;?>

								<?php else:?>
									<tr>
										<td colspan="5">Nothing in your cart!</td>
									</tr>
								<?php endif;?>
							<?php endif;?>

						</tbody>
					</table>
						<form id="checkout">
							<input type="hidden" name="checkout" value="checkout">
							<button type="submit" class="btn btn-black span-6">CHECKOUT</button>
						</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end:content -->
<?php  include 'common/footer.php';?>
