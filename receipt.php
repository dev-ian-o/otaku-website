<?php  include 'common/header.php';?>
	
	<?php
		session_start();

		$user = $_SESSION['user'][0];
		if(isset($_GET['cart_id'])):
			
			$cart = json_decode(Cart::findById($_GET['cart_id']));
			if($cart != null):
				if($cart[0]->user_id == $user['user_id']):
				$a = 1;
				$row = array(
					"user_id"=> $_SESSION['user'][0]['user_id'],
					"cart_id"=> $_GET['cart_id']
				);
				$orders = json_decode(Orders::findByUserCartId($row));
				$total = 0;
	?>
	<div class="text-center" id="back-button" style="padding:20px;"><a href="account.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a> <button type="button" id="print-btn" class="btn btn-success">Print <i class="fa fa-print"></i></button> </div>
	<div id="printdiv" class="container">
		<div style="padding:50px;border:1px solid #000;" class="row">
			
			<h1 class="text-center">Otaku Shop</h1>
			<h3 class="text-center">Invoice</h3>
			<div>
				<div class="row">
					<label>Invoice Number: </label> <?= $cart[0]->invoice_no ?>
					<span class="pull-right"><label>Date: </label> <?= $cart[0]->date ?></span>
				</div>
				<div class="row">
					<label>Name: </label> <?= $user['firstname']. " ". $user['lastname'] ?>
					<span class="pull-right"><label>Shipping Address: </label> <?= $cart[0]->shipping_address ?></span>
				</div>
			</div>
			<div class="col-xs-12">	

				<h5 class="text-center">Order Summary</h5>
				<table class="table">
						<tr>
							<td>#</td>
							<td>Product</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Total</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($orders as $key => $value):?>
						<tr>
							<td><?= $a++; ?></td>
							<td><?= json_decode(Products::findById($value->product_id))[0]->product_name ?></td>
							<td><?= $value->price; ?></td>
							<td><?= $value->quantity; ?></td>
							<td>P<?= number_format($value->quantity*$value->price); ?></td>
						</tr>
						<?php $total += $value->quantity*$value->price;?>
						<?php endforeach;?>
						<tr>
							<td colspan="4"><span class="pull-right">Total:</span></td>
							<td>P<?= number_format($total); ?></td>
						</tr>
						<tr>
							<td colspan="4"><span class="pull-right">Shipping Fee:</span></td>
							<td>P<?= number_format($cart[0]->shipping_fee); ?></td>
						</tr>
						<tr>
							<td colspan="4"><span class="pull-right">Overall Total:</span></td>
							<td><b>P<?= number_format($total+$cart[0]->shipping_fee); ?></b></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

			<?php endif;?>
		<?php endif;?>
	<?php endif;?>

<script src="assets/js/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

      $("#print-btn").click(function(){
        $("#print-btn").hide();
        $("#back-button").hide();
        window.print();

        $("#print-btn").show();
        $("#back-button").show();
      });

    });


</script>