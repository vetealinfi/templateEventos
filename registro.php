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
		<section class="gris-2">
			<!-- ******CONTENT****** --> 
			<div class="content container">
				<div class="page-wrapper col-md-12 titulo-evento">
					<header class="page-heading clearfix">
						<h1 class="heading-title pull-left">REGISTRO</h1><br/>
					</header>
					<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3" style="padding: 20px 15px;">
						<div class="row">
							<div class="facebook form-right col-xs-12"><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i><span class="hidden-xs"> Facebook</span></a></div>
						</div>
						<div class="hr">
							<span>o</span>
						</div>
						<form role="form" id="form-contact-agent" method="post"  class=" clearfix">
							<div class="form-group">
								<label class="control-label strong">Nombre *</label>
								<div class="input-requerido">
									<input type="text" class="form-control" id="texto" placeholder="" require>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label strong">Apellido *</label>
								<div class="input-requerido">
									<input type="text" class="form-control" id="texto" placeholder="" require>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label strong">Correo electrónico *</label>
								<div class=" input-requerido">
									<input type="text" class="form-control" id="texto" placeholder="" require>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label strong">Contraseña nueva *</label>
								<div class="input-requerido">
									<input type="text" class="form-control" id="texto" placeholder="" require>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label strong">Repetir Contraseña *</label>
								<div class="input-requerido">
									<input type="text" class="form-control" id="texto" placeholder="" require>
								</div>
							</div>
							<button type="submit" class="btn btn-theme" style="width: 100%;">Crear cuenta</button>
							<div class="row">
								<div class="mb10r top col-md-5 col-sm-5 col-xs-5">
									<div class="checkbox">
										<label>
											<input type="checkbox" checked>Recordarme
										</label>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
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
	<!-- validador -->
	<script type="text/javascript" src="assets/js/validador.js"></script>
	<!-- validador -->
</body>
</html> 

