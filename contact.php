<?php  include 'common/header.php';?>


  <body>
	
	<?php  include 'common/nav.php';?>

	<!-- begin:heading -->
	<div class="heads" style="background: url(assets/img/img02.jpg) center center;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>//</span> contact us</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- end:heading -->

	<!-- begin:contact -->
	<div class="page-content contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
				      <li><a href="#">Home</a></li>
				      <li class="active">Contact Us</li>
				    </ol>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Lorem ipsum dolor sit amet</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis. Sed blandit augue vitae augue scelerisque bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis. Sed blandit augue vitae augue scelerisque bibendum.</p>
				</div>
			</div>
			<div class="row padd20-top-btm">
				<form method="post" action="contact.php">
					<div class="col-md-5 col-sm-5">
						<h3>send message</h3>
						<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
						<input type="email" name="email" class="form-control" placeholder="Enter your mail" required>
						<input type="text" name="subject" class="form-control" placeholder="Enter your subject" required>
					</div>
					<div class="col-md-7 col-sm-7">
						<textarea name="message" class="form-control" rows="7" placeholder="Type your message" required></textarea>
						<input type="submit" name="submit" value="Send Message" class="btn btn-black btn-block btn-lg">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div id="maps"></div>
	<!-- end:contact -->
<?php  include 'common/footer.php';?>
