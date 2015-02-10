<?php session_start(); ?>
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
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="product.php?category=accessories">Accessories</a></li>
				  <li><a href="product.php?category=collectibles">Collectibles</a></li>
				  <li><a href="product.php?category=costumes">Costumes</a></li>
				  <li><a href="product.php?category=toy">Toys</a></li>
				  <li><a href="product.php?category=magazine">magazines</a></li>
				</ul>
			  </li>
			  <?php if(isset($_SESSION['user'])):?>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['user'][0]['email'];?> <i class="fa fa-caret-down"></i></a>
				<ul class="dropdown-menu">
				  <li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
				  <li class="divider"></li>
				  <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
				</ul>
			  </li>
			  <?php else:?>
			  <li><a href="#" data-toggle="modal" data-target=".modal-login">Log In</a></li>
			  <li><a href="#" data-toggle="modal" data-target=".modal-sign-up">Sign Up!</a></li>
			  <?php endif;?>
  			  <li><a href="cart.php"> <i class="fa fa-shopping-cart fa-1x"></i> <span class=""></span> &nbsp; <span style="background-color:rgb(190, 7, 6);" class="cart-counter active badge pull-right"><?php if(isset($_SESSION['cart_counter'])) echo $_SESSION['cart_counter'];?></span></a></li>
			</ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="#" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></a>
        <h4 class="modal-title" id="myModalLabel">Login</h4>  
      </div>
      <div class="modal-body">
        <form method="post" id="form-login">
          <div class="control-group">
            <label class="control-label" for="email">Email Address:</label>
            <input type="hidden" name="login">
            <div class="controls">
              <input class="span5 form-control" type="email" name="email" id="email" placeholder="juandelacruz@gmail.com" required>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="password">Password</label>

            <div class="controls">
              <input class="span5 form-control" type="password" name="password" id="password" placeholder="Password" required>
            </div>
          </div>

      </div>
      <div class="modal-footer">
			<button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
	        <input type="submit" name="submit" class="btn btn-black btn-lg" value="Log in!">
		</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-sign-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="#" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></a>
        <h4 class="modal-title" id="myModalLabel">Sign Up!</h4>  
      </div>
      <div class="modal-body">
        <form method="post" id="form-sign-up">
          <div class="control-group">
            <label class="control-label" for="firstname">First name:</label>
            <input type="hidden" name="signup">
            <div class="controls">
              <input class="span5 form-control" type="text" name="firstname" id="firstname" placeholder="Ian" required>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="lastname">Last name:</label>
            <div class="controls">
              <input class="span5 form-control" type="text" name="lastname" id="lastname" placeholder="Olinares" required>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="email">Email Address:</label>
            <div class="controls">
              <input class="span5 form-control" type="email" name="email" id="email" placeholder="juandelacruz@gmail.com" required>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="password">Password</label>

            <div class="controls">
              <input class="span5 form-control" type="password" name="password" id="password" placeholder="Password" required>
            </div>
          </div>


          <div class="control-group">
            <label class="control-label" for="password">Re-type password:</label>

            <div class="controls">
              <input class="span5 form-control" type="password" name="re-type password" id="password" placeholder="Percentage" required>
            </div>
          </div>

      </div>
      <div class="modal-footer">
			<button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
	        <input type="submit" name="submit" class="btn btn-black btn-lg" value="Sign Up!">
		</form>
      </div>
    </div>
  </div>
</div>

