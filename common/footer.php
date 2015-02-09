	
	<!-- begin:footer -->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Otaku Shop</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus,<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<ul class="list-unstyled social-icon">
		              <li><a href="#" rel="tooltip" title="Facebook" class="icon-facebook"><span><i class="fa fa-facebook-square"></i></span></a></li>
		              <li><a href="#" rel="tooltip" title="Twitter" class="icon-twitter"><span><i class="fa fa-twitter"></i></span></a></li>
		              <li><a href="#" rel="tooltip" title="Linkedin" class="icon-linkedin"><span><i class="fa fa-linkedin"></i></span></a></li>
		              <li><a href="#" rel="tooltip" title="Instagram" class="icon-gplus"><span><i class="fa fa-google-plus"></i></span></a></li>
		              <li><a href="#" rel="tooltip" title="Instagram" class="icon-instagram"><span><i class="fa fa-instagram"></i></span></a></li>
		            </ul>

					<div class="sitemap">
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="about.php">ABOUT</a></li>
							<li><a href="profile.php">PROFILE</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:footer -->
	
	<!-- begin:copyright -->
	<div id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<small>Copyright &copy; 2015 Otaku Shop All Right Reserved. Made With <i class="fa fa-heart-o"></i> by Ian Olinares</small>
				</div>
			</div>
		</div>
	</div>
	<!-- end:copyright -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="assets/js/gmap3.js"></script>
    <script src="assets/js/script.js"></script>

	<script type="text/javascript">

		$("#form-login").on('submit', function(e){
			e.preventDefault();
			that = $(this);
			$.ajax({
	              url: 'includes/requests/requests.php',
	              type: 'POST',
	              data: $(this).serialize(),
	              dataType: 'json',
	              success: function(results){
					console.log(results);
					if(results.success === true)
					{
						alert('Successfully Logged In!');
						 location.reload();
					}
					else{
						alert('Invalid email or password!')
						that[0].reset();
					}

	               

	              },
	              complete:function(){
	                // $(".loader").fadeOut('slow');
	                //loader stop here.
	              }
	        });
			return false;
		});

		$("#form-sign-up").on('submit', function(e){
			e.preventDefault();
			$.ajax({
	              url: 'includes/requests/requests.php',
	              type: 'POST',
	              data: $(this).serialize(),
	              dataType: 'json',
	              success: function(results){
					console.log(results);
					if(results.success === true)
					{
						alert('Successfully Signed up! Please log in your account. Thank You!');
						$('.modal').modal('hide');
						$('.modal-login').modal('show');
					}
					else{
						alert('Invalid email!');
					}

	               

	              },
	              complete:function(){
	                // $(".loader").fadeOut('slow');
	                //loader stop here.
	              }
	        });
			return false;
		});


		$("#add-product").on('submit', function(e){
			e.preventDefault();
			$.ajax({
	              url: 'includes/requests/requests.php',
	              type: 'POST',
	              data: $(this).serialize(),
	              dataType: 'json',
	              success: function(results){
					console.log(results);
	               
					if(results.success === true){
						alert('Successfully added to cart!');
						$('.cart-counter').html(results.cart_size);
					}
					else
						alert('Already added to cart');
	              },
	              complete:function(){
	                // $(".loader").fadeOut('slow');
	                //loader stop here.
	              }
	        });
			return false;
		});


		$(".remove-cart").on('submit', function(e){
			e.preventDefault();
			that = $(this);
			$.ajax({
	              url: 'includes/requests/requests.php',
	              type: 'POST',
	              data: $(this).serialize(),
	              dataType: 'json',
	              success: function(results){
					console.log(results);
	               
					if(results.success === true){
						alert('Successfully removed cart!');
						$('.cart-counter').html(results.cart_size);
						that.parent().parent().parent().parent().remove();

					}
	              },
	              complete:function(){
	                // $(".loader").fadeOut('slow');
	                //loader stop here.
	              }
	        });
			return false;
		});

		$(".update-cart").on('submit', function(e){
			e.preventDefault();
			that = $(this);			
			$el = that.parent().parent().parent().parent();

			$val = $($el).find("[type=number]").val();
			if($.isNumeric($val) && $val > 0)
			{
				$(that).find('[name=qty]').val($val);
						// debugger;
							$.ajax({
					              url: 'includes/requests/requests.php',
					              type: 'POST',
					              data: $(this).serialize(),
					              dataType: 'json',
					              success: function(results){
									console.log(results);
					               
									if(results.success === true){
										alert('Successfully updated cart!');
										$('.cart-counter').html(results.cart_size);
										// $el = that.parent().parent();
										// $($el).find("[type=number]").val(results.qty);
			
									}
					              },
					              complete:function(){
					                // $(".loader").fadeOut('slow');
					                //loader stop here.
					              }
					        });
			}else{
				alert('Invalid number');
			}
			return false;
		});

		$("#checkout").on('submit', function(e){
				e.preventDefault();
				$carts = $('.update-cart');

				$('.update-cart').each(function(index){


					$el = $('.update-cart')[index];
					$el = $el.parentElement.parentElement.parentElement.parentElement;
					$val = $($el).find("[type=number]").val();
					debugger;
					if($.isNumeric($val) && $val > 0)
					{
						$($el).find('[name=qty]').val($val);
						$.ajax({
					              url: 'includes/requests/requests.php',
					              type: 'POST',
					              data: $($('.update-cart')[index]).serialize(),
					              dataType: 'json',
					              success: function(results){
									console.log(results);
					               
									if(results.success === true){
										// alert('Successfully updated cart!');
										$('.cart-counter').html(results.cart_size);
										// $el = that.parent().parent();
										// $($el).find("[type=number]").val(results.qty);
			
									}
					              },
					              complete:function(){
					                // $(".loader").fadeOut('slow');
					                //loader stop here.
					              }
					        });					
					}else
					{
						alert('Invalid number');
					}

				});

				location.href = "checkout.php";
				return false;
			});
	</script>
  </body>
</html>