<?php  include 'common/header.php';?>

  <body>
	
	<?php  include 'common/nav.php';?>
	
<?php if(isset($_SESSION['user'])):?>
	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span>User Account</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- end:heading -->
	
	<!-- begin:content -->
	<div class="page-content">
		<div class="container">
		<!-- begin:tab -->
		<div class="row">
			<div class="col-md-12 product-tabs">
				<ul id="myTab" class="nav nav-tabs">
			      <li class="active"><a href="#user-account" data-toggle="tab">User Account</a></li>
			      <li class=""><a href="#orders" data-toggle="tab">Orders</a></li>
			      <li class=""><a href="#settings" data-toggle="tab">Settings</a></li>
			    </ul>
			    <div id="myTabContent" class="tab-content">
			      <div class="tab-pane fade" id="user-account">
			      		<?= $_SESSION['user'][0]['email']?>
			      </div>
			      <div class="tab-pane fade  active in" id="orders">
			        	<div class="row">
			        		<div class="col-md-12">

						<table class="table table-responsive">
							<thead>
								<t>
									<td>#</td>
									<td>Invoice No.</td>
									<td>Date</td>
									<td>Note</td>
									<td>Total</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<?php $a = 1; $order =  json_decode(Cart::findByUserId($_SESSION['user'][0]['user_id']));?>
								<?php foreach($order as $key => $value):?>
									<tr>	
										<td><?= $a++; ?></td>
										<td><?= $value->invoice_no; ?></td>
										<td><?= $value->date; ?></td>
										<td><span data-toggle="tooltip" data-placement="top" title="<?= $value->note; ?>"><?= substr($value->note, 0, 12); ?><?php if(strlen($value->note)>12) echo "...";?></span></td>
										<td>P<?= number_format( $value->total+ $value->shipping_fee); ?></td>
										<td>
											<form action="receipt.php">
												<input type="hidden" name="cart_id" value="<?= $value->cart_id;?>">
												<button type="submit" class="btn btn-black">View Receipt</button>
											</form>
										</td>
									</tr>
								<?php endforeach;?>
								<?php if($order == null):?>
									<tr>
										<td colspan="5">No orders yet!</td>
									</tr>
								<?php endif;?>

							</tbody>
						</table>
			        		</div>
			        	</div>	
			      </div>

			      <div class="tab-pane fade" id="settings">
			        settings here!
			      </div>
			    </div>

			</div>
		</div>
		<!-- end:tab -->
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
