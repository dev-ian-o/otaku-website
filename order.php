<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>

	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span> Order</h2>
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
				      <li class="active">Order</li>
				    </ol>
				</div>
			</div>
			
			<div class="row confirm">
				<div class="col-md-12">
					<form class="form-horizontal" role="form">
					  	<h3 class="text-center">Order</h3>
					  	<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Item Code</label>
							<div class="col-sm-4">
							  <input type="text" class="form-control" placeholder="Code : " required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Quantity</label>
							<div class="col-sm-4">
							  <input type="text" class="form-control" placeholder="Quantity : " required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Name</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control" placeholder="Name : " required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Email address</label>
							<div class="col-sm-6">
							  <input type="email" class="form-control" placeholder="Email address : " required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Phone number</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control" placeholder="Phone number : " required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Shipping Address</label>
							<div class="col-sm-6">
							  <textarea class="form-control" rows="8" placeholder="Shipping Address : " required></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Payment Method</label>
							<div class="col-sm-6">
							  <select class="form-control" required>
								<option value="Paypall">Paypall</option>
								<option value="Bank Transfer">Bank Transfer</option>
								<option value="Bitcoins">Bitcoin</option>
							  </select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Notes</label>
							<div class="col-sm-6">
							  <textarea class="form-control" rows="8" placeholder="Notes : "></textarea>
							</div>
						</div>

						<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-10">
						      <button type="submit" class="btn btn-black">Order Now</button>
						    </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end:content -->
<?php  include 'common/footer.php';?>