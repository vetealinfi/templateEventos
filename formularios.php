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
                    <h1 class="heading-title pull-left">FORMULARIOS</h1>
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <aside class="page-sidebar col-md-2 col-sm-4 affix-top">                    
                            <section class="widget">
                                <ul class="nav">
                                    <li><a href="tipografias.php">Tipografias</a></li>
                                    <li><a href="tablas.php">Tablas</a></li>
                                    <li><a href="botones.php">Botones</a></li>
                                    <li><a href="componentes.php">Componentes</a></li>
                                    <li><a href="iconos.php">Iconos</a></li>
                                    <li class="active"><a href="formularios.php">Formularios</a></li>
                                </ul>                                        
                            </section><!--//widget-->
                        </aside><!--//page-sidebar-->
                        <div class="content-wrapper col-md-10 col-sm-8">  
                            <div class="page-row">
                                <form role="form" id="form-contact-agent" method="post"  class="form-horizontal clearfix">
									<div class="form-group">
										<label class="col-sm-3 control-label">texto</label>
										<div class="col-sm-9 input-requerido">
											<input type="text" class="form-control" id="texto" placeholder="" require>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Usuario</label>
										<div class="col-sm-9 input-requerido">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Usuario</label>
										<div class="col-sm-9 input-requerido">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Contraseña</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="contraseña" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">E-mail</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="email" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Teléfono</label>
										<div class="col-sm-9">
											<input type="tel" class="form-control" id="telefono" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Número</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" id="numero" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Buscar</label>
										<div class="col-sm-9">
											<input type="search" class="form-control" id="buscar" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Checkbox</label>
										<div class="checkbox espacio col-sm-9">
											<label><input type="checkbox" value="" id="checkbox"></label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Radio</label>
										<div class="radio espacio col-sm-9">
											<label><input name="RadioGroup1" type="radio" value="opción" id="RadioGroup1_0"></label>
											<label><input name="RadioGroup1" type="radio" value="opción" id="RadioGroup1_1"></label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Selector</label>
										<div class="col-sm-9">
											<select class="selector" name="" size="1">
												<option value="0" selected>select</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Área de texto</label>
										<div class="col-sm-offset-3 col-sm-9">
											<textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cr
											</textarea>
										</div>
									</div>
																					
								</form>
								<form role="form" id="form-contact-agent" method="post"  class="clearfix">
									<div class="form-group">
										<label for="validate-text">Validate Text</label>
										<div class="input-group">
											<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" required>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-optional">Optional</label>
										<div class="input-group">
											<input type="text" class="form-control" name="validate-optional" id="validate-optional" placeholder="Optional">
											<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-optional">Already Validated!</label>
										<div class="input-group">
											<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" value="Validated!" required>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-email">Validate Email</label>
										<div class="input-group" data-validate="email">
											<input type="text" class="form-control" name="validate-email" id="validate-email" placeholder="Validate Email" required>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-phone">Validate Phone</label>
										<div class="input-group" data-validate="phone">
											<input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-length">Minimum Length</label>
										<div class="input-group" data-validate="length" data-length="5">
											<textarea type="text" class="form-control" name="validate-length" id="validate-length" placeholder="Validate Length" required></textarea>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-select">Validate Select</label>
										<div class="input-group">
											<select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>
												<option value="">Select an item</option>
												<option value="item_1">Item 1</option>
												<option value="item_2">Item 2</option>
												<option value="item_3">Item 3</option>
											</select>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<label for="validate-number">Validate Number</label>
										<div class="input-group" data-validate="number">
											<input type="text" class="form-control" name="validate-number" id="validate-number" placeholder="Validate Number" required>
											<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-theme col-md-12">botón</button>
									</div>
								</form>
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
	<!-- validador -->
	<script type="text/javascript" src="assets/js/validador.js"></script>
	<!-- validador -->
</body>
</html> 

