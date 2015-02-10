<?php  include 'common/header.php';?>
  <body>
	
	<?php  include 'common/nav.php';?>
<?php if(isset($_SESSION['user'])):?>	
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
					<form id="checkout-form" class="form-horizontal" role="form" method="post">
					  	<h3 class="text-center">Checkout</h3>
					  	<hr>
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
							<?php $shipping_fee = 500; $a = 1; $total = 0;?>
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
									<tr>
										<td colspan="3"><span class="pull-right">Shipping Fee:</span></td>
										<td><b>P<?= number_format($shipping_fee);?></b></td>
									</tr>
									<tr>
										<td colspan="3"><h4><span class="pull-right">OVERALL TOTAL:</span></h4></td>
										<td><h4><b>P<?= number_format($total+$shipping_fee);?></b></h4></td>
									</tr>
								<?php else:?>
									<tr>
										<td colspan="5">Nothing in your cart!</td>
									</tr>
								<?php endif;?>
							<?php endif;?>

							</tbody>
						</table>

						<div class="form-group">
							<label class="col-sm-3 control-label">Shipping Address:</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" name="shipping_address" placeholder="Shipping Address" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Note:</label>
							<div class="col-sm-8">
							  <textarea type="text" class="form-control" name="note" placeholder="Note" required>
							  </textarea>
							</div>
						</div>

						<input type="hidden" name="user_id" value="<?=  $_SESSION['user'][0]['user_id'];?>">
						<input type="hidden" name="total" value="<?= $total;?>">
						<input type="hidden" name="shipping_fee" value="<?= $shipping_fee;?>">
						<input type="hidden" name="final_checkout" value="<?= $total+$shipping_fee;?>">

						<div class="text-center">
						<?php if ($_SESSION['cart'] != null):?>
							<button type="submit" class="btn btn-black">Final Checkout</button>
						<?php endif;?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php else:?>
	<script type="text/javascript">
		alert('Please login first');
		location.href="index.php";
	</script>	
<?php endif;?>
	<!-- end:content -->
<?php  include 'common/footer.php';?>
