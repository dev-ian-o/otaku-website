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
			      <li class=""><a href="#user-account" data-toggle="tab">User Account</a></li>
			      <li class="active"><a href="#orders" data-toggle="tab">Orders</a></li>
			      <li class=""><a href="#settings" data-toggle="tab">Settings</a></li>
			    </ul>
			    <div id="myTabContent" class="tab-content">
			      <div class="tab-pane fade " id="user-account">
			      	<div class="row padd20-top-btm">

			      			<h5>
			      		<div class="col-xs-12">

									<h3>User Account</h3>
			      		<i class="fa fa-envelope"></i> <label>Email Address:</label><label class="badge"> <?= $_SESSION['user'][0]['email']?></label><br><br>
			      		<i class="fa fa-user"></i> <label>Name:</label><label class="badge user-profile-name"> <?= $_SESSION['user'][0]['firstname']." ".$_SESSION['user'][0]['lastname']?></label>
			      		</div>
			      		</h5>
			      	</div>
			      </div>
			      <div class="tab-pane fade active in" id="orders">
			        	<div class="row padd20-top-btm">

			        		<div class="col-md-12">

									<h3>Orders</h3>
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
												<button type="submit" class="btn btn-primary">View Receipt <i class="fa fa-eye"></i></button></button>
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
			        	<div class="row padd20-top-btm">
								<div class="col-md-6 col-sm-5">
									<form method="post" id="profile-form">
										<input type="hidden" name="change_profile" value="change_profile">
										<input type="hidden" name="user_id" value="<?=$_SESSION['user'][0]['user_id']?>">
										<h3>Profile settings</h3>
										<label>First Name:</label>
										<input type="text" name="firstname" class="form-control" placeholder="Enter your first name" required>
										<label>Last Name:</label>
										<input type="text" name="lastname" class="form-control" placeholder="Enter your last name" required><br>
										<div class="text-center">
											<button type="submit" name="submit" value="submit" class="btn btn-success">Submit <i class="fa fa-check"></i></button></button>
										</div>
										</form>
									<form method="post" id="password-form">
										<input type="hidden" name="change_password">
										<input type="hidden" name="user_id" value="<?=$_SESSION['user'][0]['user_id']?>">
										<input type="hidden" name="email" value="<?=$_SESSION['user'][0]['email']?>">

										<h4>Change Password</h4>
										<label>Old Password:</label>
										<input type="password" name="old_password" class="form-control" placeholder="Enter your old password">
										<label>New Password:</label>
										<input type="password" name="password" class="form-control" placeholder="Enter your new password" required>
										<label>Retype Password:</label>
										<input type="password" name="repassword" class="form-control" placeholder="Retype your new password" required><br>
										<div class="text-center">
											<button type="submit" name="submit" value="submit" class="btn btn-success">Change Password <i class="fa fa-check"></i></button>
										</div>
									</form>
								</div>
						</div>
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
