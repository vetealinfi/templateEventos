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
        <!-- ******CONTENT****** -->
		<section class="bg-evento">
			<div class="content container">
				<div class="padding-0 col-md-6 col-sm-6">
					<img src="assets/images/slides/imagen-evento.jpg"  alt="" style="width: 100%;" />
				</div><!--//flexslider-->
				<div id="promo-slider" class="slider flexslider col-md-6 col-sm-6 hidden-xs">
					<ul class="slides col-md-12">
						<li>
							<img src="assets/images/slides/imagen-evento.jpg"  alt="" />
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
			</div><!--//content-->
		</section>
		<section class="bg-detalle">
			<!-- ******CONTENT****** --> 
			<div class="content container">
				<div class="row">
					<div class="page-wrapper col-md-12 titulo-evento">
						<header class="page-heading clearfix">
							<h1 class="heading-title pull-left">RESULTADOS: TRAIL RUNNING</h1>
						</header>
						<div class="panel-group botton-5" id="filtro">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#filtro" href="#collapse-2">
											FILTROS
										</a>
									</h4>
								</div><!--//pane-heading-->
								<div id="collapse-2" class="panel-collapse collapse">
									<div class="row">
										<div class="panel-body categoria">
											<div class="col-sm-3">
												<h3 class="title"><a href="news-single.html">DEPORTIVO</a></h3>
												<ul class="job-list custom-list-style">
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<h3 class="title"><a href="news-single.html">ENTRETENCIÓN</a></h3>
												<ul class="job-list custom-list-style">
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<h3 class="title"><a href="news-single.html">EMPRESA</a></h3>
												<ul class="job-list custom-list-style">
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="job-list custom-list-style">
													<h3 class="title"><a href="news-single.html">OTROS</a></h3>
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
										</div><!--//panel-body-->
									</div><!--//row-->
								</div><!--//panel-colapse-->
							</div><!--//panel-->
						</div><!--//panel-group-->
						<div class="">
							<div class="encontrados padding-0 col-sm-6"><i class="fa fa-search"></i> Eventos encontrados: <span>88</span></div>
							<form role="form" id="form-contact-agent" method="post"  class="clearfix padding-0 col-sm-6">
								<div class="form-group padding-0 ordenar col-sm-6 col-md-5 col-xs-12">
									<div class="input-group col-xs-12">
										<select class="form-control" name="validate-select" placeholder="Validate Select" required>
											<option value="">Ordenar por:</option>
											<option value="item_1">Item 1</option>
											<option value="item_2">Item 2</option>
											<option value="item_3">Item 3</option>
										</select>
									</div>
								</div>
							</form>
						</div>
						<div class="page-content">
							<div class="row page-row">
								<div class="news-wrapper">                         
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
									<div class="col-md-3 col-sm-4 col-xs-12 text-center">
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
								</div><!--//news-wrapper-->
							</div><!--//page-row-->
						</div><!--//page-content-->
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
											OTRAS CATAGORIAS
										</a>
									</h4>
								</div><!--//pane-heading-->
								<div id="collapse-1" class="panel-collapse collapse">
									<div class="row">
										<div class="panel-body categoria">
											<div class="col-sm-3">
												<h3 class="title"><a href="news-single.html">DEPORTIVO</a></h3>
												<ul class="job-list custom-list-style">
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<h3 class="title"><a href="news-single.html">ENTRETENCIÓN</a></h3>
												<ul class="job-list custom-list-style">
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<h3 class="title"><a href="news-single.html">EMPRESA</a></h3>
												<ul class="job-list custom-list-style">
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="job-list custom-list-style">
													<h3 class="title"><a href="news-single.html">OTROS</a></h3>
													<li><i class="fa fa-caret-right"></i><a href="#">MOUNTAIN BIKE</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">TRAIL RNNING</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">AVENTURA</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">OBSTÁCULOS</a></li>
												</ul>
											</div>
										</div><!--//panel-body-->
									</div><!--//row-->
								</div><!--//panel-colapse-->
							</div><!--//panel-->
						</div><!--//panel-group-->
					</div>
				</div><!--//row-->
			</div><!--//content-->
		</section><!--//widget-->
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

