<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
	include('head.php');
?>
<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
		<div class="">
			<?php
				include('header.php');
			?>
		</div>
		<!-- ******NAV****** -->
		<div class="">
			<?php
				include('navbar.php');
			?>
		</div>
        <!-- ******CONTENT****** -->
		<section class="bg-slider">
			<div class="content container">
				<div id="promo-slider" class="slider flexslider col-md-6 col-sm-12">
					<ul class="slides col-md-12">
						<li>
							<img src="assets/images/slides/slide-1.jpg"  alt="" />
							<p class="flex-caption">
								<span class="main" >Patagonian International Marathon</span>
								<br />
								<span class="secondary clearfix" >Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</span>
							</p>
						</li>
						<li>
							<img src="assets/images/slides/slide-2.jpg"  alt="" />
							<p class="flex-caption">
								<span class="main" >Patagonian International Marathon</span>
								<br />
								<span class="secondary clearfix" >Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</span>
							</p>
						</li>
					</ul><!--//slides-->
				</div><!--//flexslider-->
				<div class="col-md-6" id="categorias-box">
					<div class="row">
						<a href="resultados.php"><div class="categrias-index padding-0 col-md-6 col-sm-3" id="deportes"><p>DEPORTES</p></div></a>
						<a href="resultados.php"><div class="categrias-index padding-0 col-md-6 col-sm-3" id="entretencion"><p>ENTRETENCIÓN</p></div></a>
						<a href="resultados.php"><div class="categrias-index padding-0 col-md-6 col-sm-3" id="empresa"><p>EMPRESAS</p></div></a>
						<a href="resultados.php"><div class="categrias-index padding-0 col-md-6 col-sm-3" id="otros"><p>OTROS</p></div></a>
					</div><!--//row-->
				</div><!--//col-->
			</div><!--//content-->
		</section>
		<section class="bg-destacados">
			<div class="content container titulo">
				<h3 class="title">EVENTOS DESTACADOS</h3>
				<div id="testimonials-carousel" class="testimonials-carousel carousel slide page-wrapper row">
					<div class="carousel-inner page-content text-center">
						<div class="item active page-row">
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">26</div>
										<div class="mes">SEP 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-1.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">15</div>
										<div class="mes">AGO 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-2.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">30</div>
										<div class="mes">OCT 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-3.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">27</div>
										<div class="mes">NOV 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-4.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
						</div><!--//item-->
						<div class="item page-row">
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">26</div>
										<div class="mes">SEP 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-1.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">15</div>
										<div class="mes">AGO 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-2.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">30</div>
										<div class="mes">OCT 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-3.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 text-center">
								<div class="album-cover">
									<div class="fecha" style="display: flex;">
										<div class="dia">27</div>
										<div class="mes">NOV 2015 </br> CHILE</div>
									</div>
									<div class="precio">$30.000</div>
									<div class="img-destacado">
										<a href="gallery-album.html"><img class="img-responsive" src="assets/images/gallery/evento-4.jpg" alt="" /></a>
										<div class="desc desc-2">
											<h4><small><a href="#">Patagonian International Marathon</a></small></h4>
											<p>Parque Nacional Torres del Paine, Provincia de Última Esperanza, Chile</p>
										</div>
									</div>
								</div>
							</div>
						</div><!--//item-->
					</div><!--//carousel-inner-->
				</div><!--//testimonials-carousel-->
				<div class="carousel-controls controles">
					<a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
					<a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
				</div><!--//carousel-controls-->
			</div>                        
		</section><!--//widget-->
		<section class="promo">
			<div class="content container titulo box box-dark">
				<div class="col-md-9">
					<h1 class="section-heading">Publica tus eventos</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
				</div>  
				<div class="col-md-3">
					<a class="btn btn-cta" href="#"><i class="fa fa-play-circle"></i>Crear un evento</a>  
				</div>
			</div>
		</section><!--//promo-->
		<section class="awards">
			<div class="content container titulo">
				<div id="awards-carousel" class="awards-carousel carousel slide">
					<div class="carousel-inner">
						<div class="item active">
							<ul class="logos">
								<li class="col-md-2 col-sm-2 col-xs-4">
									<a href="#"><img class="img-responsive" src="assets/images/awards/award1.jpg"  alt="" /></a>
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<a href="#"><img class="img-responsive" src="assets/images/awards/award2.jpg"  alt="" /></a>
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<a href="#"><img class="img-responsive" src="assets/images/awards/award3.jpg"  alt="" /></a>
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<a href="#"><img class="img-responsive" src="assets/images/awards/award4.jpg"  alt="" /></a>
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<a href="#"><img class="img-responsive" src="assets/images/awards/award5.jpg"  alt="" /></a>
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<a href="#"><img class="img-responsive" src="assets/images/awards/award6.jpg"  alt="" /></a>
								</li>             
							</ul><!--//slides-->
						</div><!--//item-->
						
						<div class="item">
							<ul class="logos">
								<li class="col-md-2 col-sm-2 col-xs-4">
									<img class="img-responsive" src="assets/images/awards/award7.jpg"  alt="" />
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<img class="img-responsive" src="assets/images/awards/award6.jpg"  alt="" />
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<img class="img-responsive" src="assets/images/awards/award5.jpg"  alt="" />
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<img class="img-responsive" src="assets/images/awards/award4.jpg"  alt="" />
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<img class="img-responsive" src="assets/images/awards/award3.jpg"  alt="" />
								</li>
								<li class="col-md-2 col-sm-2 col-xs-4">
									<img class="img-responsive" src="assets/images/awards/award2.jpg"  alt="" />
								</li>             
							</ul><!--//slides-->
						</div><!--//item-->
					</div><!--//carousel-inner-->
					<a class="left carousel-control" href="#awards-carousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right carousel-control" href="#awards-carousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
					
				</div>
			</div>
		</section>
	</div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
	<div class="">
		<?php
			include('footer.php');
		?>
	</div>
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

