<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
	include('head.php');
?>
<body>
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
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Cuenta</h1>
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <aside class="page-sidebar col-md-3 col-sm-4 affix-top">                    
                            <section class="widget">
                                <div class="panel-group" role="tablist">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="collapseListGroupHeading1">
											<h4 class="panel-title">
												<a class="collapsed" href="dashboard.php" aria-expanded="false">
													Dashboard
												</a>
											</h4>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="collapseListGroupHeading1">
											<h4 class="panel-title">
												<a class="" role="button" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true" aria-controls="collapseListGroup1">
												Mis tickets
												</a>
											</h4>
										</div>
										<div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
											<ul class="list-group submenu">
												<a href="proximos-eventos.php"><li class="list-group-item active">Próximos eventos</li></a>
												<a href="eventos-pasados.php"><li class="list-group-item">Eventos pasados</li></a>
												<a href="otros.php"><li class="list-group-item">Otros</li></a>
											</ul>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="collapseListGroupHeading1">
											<h4 class="panel-title">
												<a class="collapsed" href="mis-compras.php" aria-expanded="false">
													Mis compras
												</a>
											</h4>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="collapseListGroupHeading1">
											<h4 class="panel-title">
												<a class="collapsed" href="detalle-orden.php" aria-expanded="false">
													Detalle de orden
												</a>
											</h4>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="collapseListGroupHeading1">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="false" aria-controls="collapseListGroup2">
													Mi cuenta
												</a>
											</h4>
										</div>
										<div id="collapseListGroup2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
											<ul class="list-group submenu">
												<a href="informacion-personal.php"><li class="list-group-item">Información personal</li></a>
												<a href="contrasena.php"><li class="list-group-item">Contraseña</li></a>
											</ul>
										</div>
									</div>
								</div>                                       
                            </section><!--//widget-->
                        </aside><!--//page-sidebar-->
                        <div class="content-wrapper col-md-9 col-sm-8">  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Tipografías</h1>                       
                                <h1>h1. Heading 1 <small>Secondary text</small></h1>
                                <h2>h2. Heading 2 <small>Secondary text</small></h2> 
                                <h3>h3. Heading 3 <small>Secondary text</small></h3>
                                <h4>h4. Heading 3 <small>Secondary text</small></h4> 
                                <h5>h5. Heading 3 <small>Secondary text</small></h5> 
                                <h6>h6. Heading 3 <small>Secondary text</small></h6> 
                            </div><!--//page-row--> 
                        </div><!--//content-wrapper-->                    
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
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

