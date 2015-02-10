<?php  include 'common/header.php';?>

  <body>
	<?php  include 'common/nav.php';?>


    <!-- begin:slider -->
    <div id="home">
      <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#home-slider" data-slide-to="0" class="active"></li>
          <li data-target="#home-slider" data-slide-to="1"></li>
          <li data-target="#home-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active" style="background: url(assets/img/img03.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="carousel-content">
                    <h2 class="animated fadeInUpBig text-center text-black">Moshi Moshi</h2>
                      <p class="animated rollIn text-black text-center"><span class="text900">Welcome to Otaku Shop Website</span> an awesome anime shop that is, <br> built with <i class="fa fa-heart-o"></i> for <span class="text900">anime lovers.</span><br><br> <a href="#featured-go" class="btn btn-black btn-lg">Get Started</a></p>  
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <div class="item" style="background: url(assets/img/img04.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="carousel-content">
                  	<h3 class="animated fadeInLeftBig text-left">Otaku</h3>
					<p class="animated fadeInDownBig text-left">is a Japanese term for people with obsessive interests,<br> commonly the anime and manga fandom.</p>
					<a class="btn btn-black btn-lg animated fadeInRight" href="#testimoni-go">View Testimonials &raquo;</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item" style="background: url(assets/img/img05.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="carousel-content">
                  	<h3 class="animated fadeInLeftBig text-left">Cart</h3>
					<p class="animated fadeInDownBig text-left">Otaku shop website is also an online store to buy your favorite anime merchadises. </p>
					<a class="btn btn-black btn-lg animated fadeInRight" href="#products-go">Featured Products &raquo;</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#home-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#home-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
        <div class="pattern"></div>
      </div>

    </div>
    <!-- end:slider -->
	
	<!-- begin:tagline -->	
	<div id="tagline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Hello There, This is 'Otaku Shop Website'</h2>
					<p> Otaku shop as company, expresses its support for cosplayers by allowing purchase, selling and acquisition of new cosplay materials through trade. Otaku shop serves passionate cosplayers by tailoring personalized costumes.</p>
				</div>

			</div>
		</div>

	</div>
	<!-- end:tagline -->
	<!-- begin:featured -->
	<span id="featured-go" class="anchor"></span>
	<div id="featured">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-title">
						<h2>Services</h2>
						<p>We offer anime products and services that could be categorized as: </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="featured-container">
						<div class="featured-photos">
							<i class="fa fa-exchange"></i>
						</div>
						<h3>costume trade</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="featured-container">
						<div class="featured-photos">
							<i class="fa fa-heart-o"></i>
						</div>
						<h3>costumes manufacture</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="featured-container">
						<div class="featured-photos">
							<i class="fa fa-flag"></i>
						</div>
						<h3>anime merchandise</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:featured -->
	
	<span id="products-go" class="anchor"></span>
	<!-- begin:catalogue -->
	<div id="catalogue">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-title">
						<h2>Most Wanted</h2>
						<p>The best of the best item most wanted in 2015</p>
					</div>	
				</div>
			</div>
			<div class="row">
				<?php $products = json_decode(Products::fetch());?>
				<?php foreach ($products as $key => $value):?>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(images/<?= $value->image; ?>);"></div>
					  <div class="caption-details">
						<h5><?= $value->product_name; ?></h5>
						<span class="price">P<?= $value->price; ?></span>
					  </div>
					  <a href="detail.php?id=<?= $value->product_id; ?>"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<!-- end:catalogue -->	
	
	<span id="testimoni-go" class="anchor"></span>
	<!-- begin:testimoni -->
	<div id="testimoni">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="testimoni-icon"><i class="fa fa-quote-left"></i></div>
					<h3>Our Testimonials</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="testi" class="carousel slide" data-ride="carousel">
				      <div class="carousel-inner">
				        <div class="item active">
				           <p class="testimoni-item">Excellent each and every time! 100% recommended.</p>
							<h4>&#8212; Alodia Gosiengfiao, TVHost/Cosplayer  &#8212;</h4>
				        </div>
				        <div class="item">
				           <p class="testimoni-item">Otaku shop took almost all the pain out of making my own costumes.</p>
							<h4>&#8212; Koleen Mercado, Ambassadress of Smart GameX/Cosplayer &#8212;</h4>
				        </div>
				        <div class="item">
				           <p class="testimoni-item">Ordering my wanted anime products has never been easy before I met Otaku Website.</p>
							<h4>&#8212; Myrtle Sarrosa, Actress/Cosplayer/Recording Artist &#8212;</h4>
				        </div>
				      </div>
				      <a class="left carousel-control" href="#testi" data-slide="prev">&lsaquo;</a>
				      <a class="right carousel-control" href="#testi" data-slide="next">&rsaquo;</a>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:testimoni -->
	
	<!-- begin:blog -->
	<!-- <div id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-title">
						<h2>From Blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="blog-container">
						<div class="blog-date">
							<i class="fa fa-calendar"></i>
							<span class="meta-date">26</span>
							<span class="meta-month-year">JAN 2015</span>
						</div>
						<h3><a href="single.php">the post title</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
						<p><a href="single.php" class="btn btn-black">Read more &raquo;</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="blog-container">
						<div class="blog-date">
							<i class="fa fa-calendar"></i>
							<span class="meta-date">03</span>
							<span class="meta-month-year">DEC 2014</span>
						</div>
						<h3><a href="single.php">the post title</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
						<p><a href="single.php" class="btn btn-black">Read more &raquo;</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="blog-container">
						<div class="blog-date">
							<i class="fa fa-calendar"></i>
							<span class="meta-date">19</span>
							<span class="meta-month-year">NOV 2014</span>
						</div>
						<h3><a href="single.php">the post title</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
						<p><a href="single.php" class="btn btn-black">Read more &raquo;</a></p>
					</div>
				</div>
				
			</div>
		</div>
	</div> -->
	<!-- end:blog -->
<?php  include 'common/footer.php';?>
