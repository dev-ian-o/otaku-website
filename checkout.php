<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>
	
	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span> checkout</h2>
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
				      <li class="active">Checkout</li>
				    </ol>
				</div>
			</div>
			
			<div class="row confirm">
				<div class="col-md-12">
					<form class="form-horizontal" role="form" action="receipt.php" method="post">
					  	<h3 class="text-center">Checkout</h3>
					  	<hr>
<!-- 						<div class="form-group">
							<label class="col-sm-3 control-label">Shipping Address:</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" name="shipping_address" placeholder="Shipping Address" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Note:</label>
							<div class="col-sm-8">
							  <textarea type="text" class="form-control" name="note" placeholder="Note">
							  </textarea>
							</div>
						</div> -->
						<table class="table table-responsive">
							<thead>
								<t>
									<td>#</td>
									<td>Product</td>
									<td>Quantity</td>
									<td>Total</td>
								</tr>
							</thead>
							<tbody>
							<?php $a = 1; $total = 0;?>
							<?php if (isset($_SESSION['cart'])): ?>

								<?php if (!sizeof($_SESSION['cart']) == 0): ?>
								<?php foreach($_SESSION['cart'] as $key => $value):?>
									<tr>	
										<td><?= $a++; ?></td>
										<td><?= $value['product_name']; ?> <b>(P<?= $value['price']; ?>)</b></td>
										<td><?= $value['qty']; ?></td>
										<td><?= number_format($value['qty']*$value['price']); ?></td>
									</tr>
									<?php $total += $value['qty']*$value['price']; ?>
								<?php endforeach;?>
									<tr>
										<td colspan="3"><span class="pull-right">TOTAL:</span></td>
										<td><b>P<?= number_format($total);?></b></td>
									</tr>
								<?php else:?>
									<tr>
										<td colspan="5">Nothing in your cart!</td>
									</tr>
								<?php endif;?>
							<?php endif;?>

							</tbody>
						</table>
							<div class="text-center">
								<!-- <button type="submit" class="btn btn-black">Receipt</button> -->
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end:content -->
<?php  include 'common/footer.php';?>
