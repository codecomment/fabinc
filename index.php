<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fab Inc.</title>

    <!-- Bootstrap -->
    <link href="assets/vendor/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home">

	<header class="container">

			<h1 class="logo">
				<a href="#home" title="Top of Page">
					<img src="assets/img/fab-inc-logo.png" width="200" alt="FAB - Freemark Apparel Brands Group Inc."/>
				</a>
			</h1>
			<nav id="nav" class="nav">
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#">Brands</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

	</header>
	<section class="hp-slider">
    <div  class="container">
  		<div id="carousel-example" class="carousel slide" data-ride="carousel">
  		  <ol class="carousel-indicators">
  			<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
  			<li data-target="#carousel-example" data-slide-to="1"></li>
  			<li data-target="#carousel-example" data-slide-to="2"></li>

  		  </ol>

  		  <div class="carousel-inner">
  			<div class="item active">
  			  <a href="#"><img src="assets/img/v2/bench/bench-1.jpg" /></a>
  			  <div class="carousel-caption">
  			  	<?php echo file_get_contents("assets/img/Bench-logo-wr.svg"); ?>

  			  </div>
  			</div>
  			<div class="item">
  			  <a href="#"><img src="assets/img/v2/esprit/esprit-5.jpg" /></a>
  			  <div class="carousel-caption">
  			  <?php echo file_get_contents("assets/img/Esprit-Logo-wr.svg"); ?>

  			  </div>
  			</div>
  			<div class="item">
  				<iframe style="width:100%; height:auto; min-height:640px;" src="https://www.youtube.com/embed/fvfArnvHNwk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
  			</div>

  		  </div>

  		  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
  			<span class="glyphicon glyphicon-chevron-left"></span>
  		  </a>
  		  <a class="right carousel-control" href="#carousel-example" data-slide="next">
  			<span class="glyphicon glyphicon-chevron-right"></span>
  		  </a>
  		</div>
    </div>
	</section>
	<section id="about" class="section--about">
		<div class="container">
			<h1 class="section-title"><span>About Us</span></h1>

			<p>Founded in 2004 FAB Inc. - Freemark Apparel Brands Group has established itself as a Canadian resource for the country's best retailers; having formed strategic partnerships with several leading, emerging, global brands. Scouring the globe in search of innovative design, strong supply chains and cutting edge marketing - FAB is a storehouse of what's hot in fashion globally.</p>

			<p>The company is committed to servicing a strategic point of sale network that today encompasses the country's best independent boutiques, specialty chains, department stores and mass merchants. Through an alliance with top tier sales agencies located across Canada, Fab Inc. offers excellence in customer service and industry expertise. Fab Inc has become world class brand builders with expertise in not only Wholesale, but within Retail channels as well – Retail stores, Outlets, Ecommerce.</p>
			<p>Fab Inc. is dedicated to remaining innovative and fresh while staying focused on building world renowned brands for the North American market. The company is committed to providing retailers with on-going advertising and marketing support, in addition to building awareness of its brands through consistent PR and advertising efforts - season after season.</p>
		</div>
	</section><!-- #about.section -->

	<section id="brands" class="section--brands">
		<div class="container">

			<h1 class="section-title"><span>Brands</span></h1>
			<div class="bench-brand">
				<div class="row">
					<div class="col-md-3">
						<div class="brandLogo"><?php echo file_get_contents("assets/img/Bench-logo-wr.svg"); ?></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div><img src="assets/img/bench.jpg" class="img-responsive" /></div>
					</div>
					<div class="col-md-8">
						<p>Founded in 1968, Esprit is an international fashion brand that pays homage to its roots and expresses a relaxed, sunny Californian attitude towards life. Esprit creates inspiring collections for women, men and kids made from high-quality materials paying great attention to detail. All of Esprit’s products demonstrate the Group’s commitment to make consumers “feel good to look good”. The company’s “esprit de corps” reflects a positive and caring attitude towards life that embraces community, family and friends - in that casual, laid-back California style, The Esprit style.</p>
						<p>Esprit’s collections are available in over 40 countries worldwide, in around 900 directly managed retail stores and through over 7,500 wholesale points of sales including franchise stores, and sales space in department stores. The Group markets its products under two brands, namely the Esprit brand and the edc brand. Listed on the Hong Kong Stock Exchange since 1993, Esprit has headquarters in Germany and Hong Kong.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<iframe style="width:100%; height:auto; min-height:350px;" src="https://www.youtube.com/embed/fvfArnvHNwk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="esprit-brand">
				<div class="row">
					<div class="col-md-4  col-md-offset-8 text-right">
						<div class="brandLogo"><?php echo file_get_contents("assets/img/Esprit-Logo-wr.svg"); ?></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<p>Founded in 1968, Esprit is an international fashion brand that pays homage to its roots and expresses a relaxed, sunny Californian attitude towards life. Esprit creates inspiring collections for women, men and kids made from high-quality materials paying great attention to detail. All of Esprit’s products demonstrate the Group’s commitment to make consumers “feel good to look good”. The company’s “esprit de corps” reflects a positive and caring attitude towards life that embraces community, family and friends - in that casual, laid-back California style, The Esprit style.</p>

						<p>Esprit’s collections are available in over 40 countries worldwide, in around 900 directly managed retail stores and through over 7,500 wholesale points of sales including franchise stores, and sales space in department stores. The Group markets its products under two brands, namely the Esprit brand and the edc brand. Listed on the Hong Kong Stock Exchange since 1993, Esprit has headquarters in Germany and Hong Kong.</p>
					</div>
					<div class="col-md-4">
						<div><img src="assets/img/esprit.jpg" class="img-responsive" /></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="carousel-esprit" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
							<li data-target="#carousel-esprit" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-esprit" data-slide-to="1"></li>
              <li data-target="#carousel-esprit" data-slide-to="2"></li>
              <li data-target="#carousel-esprit" data-slide-to="3"></li>

						  </ol>

						  <div class="carousel-inner">
							<div class="item active"><img src="assets/img/v2/esprit/esprit-1.jpg" /></div>
							<div class="item"><img src="assets/img/v2/esprit/esprit-2.jpg" /></div>
              <div class="item"><img src="assets/img/v2/esprit/esprit-3.jpg" /></div>
              <div class="item"><img src="assets/img/v2/esprit/esprit-4.jpg" /></div>
						  </div>

						  <a class="left carousel-control" href="#carousel-esprit" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						  </a>
						  <a class="right carousel-control" href="#carousel-esprit" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="section--contact">
		<div class="container">
			<h1 class="section-title"><span>Contact</span></h1>
			<div class="card card--center">
				<h2 class="card__title">Freemark Apparel Brands Group Inc.</h2>
				<div class="card__content">
					<p>5640 Pare Street<br/>
					Montreal, Quebec<br/>
					H4P 2M1</p>
					<p>
						<strong><i class="glyphicon glyphicon-earphone"></i></strong> <a href="tel:(514) 341-7333">(514) 341-7333</a> | <strong>F.</strong> (514) 341-1444 | <strong>Toll Free:</strong> 1 866-240-2808
					</p>
				</div>
			</div><!-- .card -->

			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="card">
						<h3 class="card__title">Lawrence Routtenberg</h3>
						<h4 class="card__subtitle">V.P. Sales</h4>
						<div class="card__content">
							<p><strong><i class="glyphicon glyphicon-earphone"></i></strong> <a href="tel:(514) 341-7333 ext. 223">(514) 341-7333 ext. 223</a></p>
							<p><a class="btn btn-primary btn-ghost" href="mailto:lrouttenberg@fabinc.ca"><i class="glyphicon glyphicon-envelope"></i></a></p>
						</div>
					</div><!-- .card -->
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card">
						<h3 class="card__title">Any Marcotte</h3>
						<h4 class="card__subtitle">National Sales Manager <small>Bench, ESPRIT</small></h4>
						<div class="card__content">
							<p><strong><i class="glyphicon glyphicon-earphone"></i></strong> <a href="tel:(514) 341-7333 ext. 310">(514) 341-7333 ext. 310</a></p>
							<p><a class="btn btn-primary btn-ghost" href="mailto:amarcotte@fabinc.ca"><i class="glyphicon glyphicon-envelope"></i></a></p>
						</div>
					</div><!-- .card -->
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card">
						<h3 class="card__title">Marlee Schnider</h3>
						<h4 class="card__subtitle">Marketing Manager <small>Bench, ESPRIT</small></h4>
						<div class="card__content">
							<p><strong><i class="glyphicon glyphicon-earphone"></i></strong> <a href="tel:(514) 341-7333 ext. 264">(514) 341-7333 ext. 264</a></p>
							<p><a class="btn btn-primary btn-ghost" href="mailto:mschnider@fabinc.ca"><i class="glyphicon glyphicon-envelope"></i></a></p>
						</div>
					</div><!-- .card -->
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card">
						<h3 class="card__title">Ashley MacIntyre</h3>
						<h4 class="card__subtitle">MacIntyre Communications | President <small>Bench PR</small></h4>
						<div class="card__content">
							<p><strong><i class="glyphicon glyphicon-earphone"></i></strong> <a href="tel:(647) 200-9135">(647) 200-9135</a></p>
							<p><a class="btn btn-primary btn-ghost" href="mailto:ashley@macintyrecommunications.com"><i class="glyphicon glyphicon-envelope"></i></a></p>
						</div>
					</div><!-- .card -->
				</div>
			</div>
		</div>
	</section><!-- #contact.section -->
	<footer>
		<div class="container"><div class="copy text-center">all rights reserved &copy; Freemark apparel brands group inc</div>
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/vendor/parallax.js-1.4.2/parallax.min.js"></script>
    <script src="assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/main.js"></script>
  </body>
</html>
