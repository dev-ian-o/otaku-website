	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="index.php"><img src="assets/img/logo-1.png" style="margin-top:-14px;height:44px;"></a>
        </div>

        <!-- Colect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        	<ul class="nav navbar-nav nav-left">
			  <li <?php if(isset($_GET['page'])) if($_GET['page']=="index") echo 'class="active"';?>><a href="index.php?page=index">Home</a></li>
			  <li <?php if(isset($_GET['page'])) if($_GET['page']=="about") echo 'class="active"';?>><a href="about.php?page=about">About</a></li>
			  <li <?php if(isset($_GET['page'])) if($_GET['page']=="profile") echo 'class="active"';?>><a href="profile.php?page=profile">Profile</a></li>
			  <li <?php if(isset($_GET['page'])) if($_GET['page']=="contact") echo 'class="active"';?>><a href="contact.php?page=contact">Contact</a></li>
			</ul>
			<a href="index.php" class="logo visible-lg visible-md"><img src="assets/img/logo.png" alt="Otaku Shop responsive catalog themes"></a>
			<div id="brand" class="visible-lg visible-md">&nbsp;</div>
			<ul class="nav navbar-nav nav-right">
			  <li <?php if(isset($_GET['page'])) if($_GET['page']=="pricing") echo 'class="active"';?>><a href="pricing.php?page=pricing">Price</a></li>
			  <li <?php if(isset($_GET['page'])) if($_GET['page']=="order") echo 'class="active"';?>><a href="order.php?page=order">Order</a></li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="product.php">Canary</a></li>
				  <li><a href="product.php">Emprit</a></li>
				  <li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Doro <i class="fa fa-caret-down icon-dropdown"></i></a>
					<ul class="dropdown-menu sub-menu">
					  <li><a href="product.php">Accessories</a></li>
					  <li><a href="product.php">Collectibles</a></li>
					  <li><a href="product.php">Costumes</a></li>
					  <li><a href="product.php">Personal Items</a></li>
					  <li><a href="product.php">Toys</a></li>
					</ul>
				  </li>
	<!-- 			  <li class="divider"></li>
				  <li><a href="product.php">Pitik</a></li>
				  <li><a href="product.php">Cucak Rowo</a></li> -->
				</ul>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="blog.php">Blog 1</a></li>
				  <li><a href="blog2.php">Blog 2</a></li>
				  <li><a href="single.php">Single 1</a></li>
				  <li><a href="single2.php">Single 2</a></li>
				</ul>
			  </li>
			</ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>