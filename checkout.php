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
		<section class="gris-2">
			<!-- ******CONTENT****** --> 
			<div class="content container">
				<div class="row">
					<div class="col-md-12 titulo-evento">
						<header class="page-heading clearfix">
							<h1 class="heading-title pull-left">CHECKOUT</h1></br/>
						</header>
					</div>
					<div class="col-md-8 col-sm-7">
						<div class="featured-courses tabbed-info page-row">
							<div class="tab-content border-none margin-none padding-top-none">
								<div class="tab-pane active col-lg-7 col-md-8  has-divider" id="tab1">
									<div class="row">
									<div class="row">
										<h4>INGRESA A TU CUENTA</h4>
										<div class="strong">¿No tienes cuenta? <a href="#tab2" data-toggle="tab">crea una cuenta aquí</a></p></div>
										<p>Nunc et tortor quis nunc gravida hendrerit eu ut mauris. Mauris pulvinar elit ut blandit dignissim.</p>
										<div class="row">
											<label class="col-sm-4 col-xs-12 strong">Ingresa con:</label>
											<div class="facebook form-right col-sm-8"><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i><span class="hidden-xs"> Facebook</span></a></div>
										</div>
										<div class="hr">
											<span>o</span>
										</div>
										<form role="form" id="form-contact-agent" method="post"  class="clearfix">
											<div class="form-group">
												<div class="input-group" data-validate="email">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input type="text" class="form-control borde-1" name="validate-email" id="validate-email" placeholder="Ingresa tu e-mail" required>
													<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
													<input type="password" class="form-control" name="validate-text" id="validate-text" placeholder="Ingresa tu contraseña" required>
													<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
												</div>
											</div>
											<button type="submit" class="btn btn-theme" style="width: 100%;" disabled>Ingresar</button>
											<div class="row">
												<div class="mb10r top col-md-5 col-sm-5 col-xs-5">
													<div class="checkbox">
														<label>
															<input type="checkbox" checked>Recordarme
														</label>
													</div>
												</div>
												<div class="mb10r recordar top col-md-7 col-sm-7 col-xs-7">
													<a href="#">No recuerdo mi clave</a>
												</div>
											</div>
										</form>
									</div><!--//row-->
									</div><!--//row-->
								</div>
								<div class="tab-pane col-lg-7 col-md-8" id="tab2">
									<div class="row">
									<div class="row">
										<h4>INGRESA A TU CUENTA</h4>
										<div class="strong">¿Ya tienes cuenta? <a href="#tab1" data-toggle="tab">ingresar con tu cuenta aquí</a></p></div>
										<p>wgefihwighwqigh qwihegqiwh geiqhweg qwhe giqwhg iqwhge pi</p>
										<div class="row">
											<label class="col-sm-4 col-xs-12 strong">Registrate con:</label>
											<div class="facebook form-right col-sm-8"><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i><span class="hidden-xs"> Facebook</span></a></div>
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
									</div><!--//row-->
									</div><!--//row-->
								</div>
							</div>
						</div><!--//featured-courses-->
						<div class="margin-top-50 col-md-7">
							<div class="row">
								<h4>INFORMACIÓN DEL ASISTENTE</h4>
								<p>Nunc et tortor quis nunc gravida hendrerit eu ut mauris. Mauris pulvinar elit ut blandit dignissim.</p>
								<h4 class="has-divider text-highlight">Información personal</h4>
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
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-5 border-left">
						<h4>DETALLE DE LA ORDEN</h4>
						<p>Nunc et tortor quis nunc gravida hendrerit eu ut mauris. Mauris pulvinar elit ut blandit dignissim.</p>
						<h4 class="has-divider text-highlight">Tickets</h4>
						<div class="table-responsive">                      
							<div class="col-md-12 blanco margen-bajo">
								<table class="table table-hover">
									<thead>
										<tr>
										<p>Suzuki Mountain Bike Tour by Giant 3ª Fecha 2015</p>
										</tr>
										<tr>
											<th width="30%" class="">Tickets</th>
											<th width="25%" class="hidden-xs">Precio</th>
											<th width="10%" class="hidden-xs">Cant.</th>
											<th width="25%" align="center" class="hidden-xs">Sub total</th>
										</tr>
									</thead>
									<tbody class="">
										<tr>
											<td>Socios Mds<span class="font-100 hidden-lg hidden-md hidden-sm"> $9.651 CLP</span></td>
											<td align="right" class="hidden-xs">$8.500 CLP</td>
											<td align="right" class="hidden-xs">1</td>
											<td align="right" class="hidden-xs">$9.651 CLP</td>
										</tr>
										<tr>
											<td>General<span class="font-100 hidden-lg hidden-md hidden-sm"> $9.651 CLP</span></td>
											<td align="right" class="hidden-xs">$13.000 CLP</td>
											<td align="right" class="hidden-xs">1</td>
											<td align="right" class="hidden-xs">$14.446 CLP</td>
										</tr>
									</tbody>
								</table><!--//table-->
							</div><!--//table-->
							<table class="table table-hover">
								<tbody>
									<tr>
									<label class="strong">Si tiene un código promocional:</label>
									</tr>
									<tr>
									<div>
										<form role="form" id="form-contact-agent" method="post"  class="clearfix">
												<div class="form-group col-md-8 col-xs-8 padding-0">
													<div class="input-requerido">
														<input type="text" class="form-control" id="texto" placeholder="Ingresalo aquí" require>
													</div>
												</div>
											<button type="button" class="btn btn-theme col-md-4 col-xs-4">APLICAR</button>
										</form>
									</div>
									</tr>
									<tr>
									<td width="40%" align="right"><h3 class="title">TOTAL:</h3></td>
									<td width="60%" align="right"><h3 class="title">$14.446 CLP</h3></td>
									</tr>
									<tr>
									  <td colspan="2" align="right">
										<form role="form" id="form-contact-agent" method="post"  class="form-horizontal clearfix">
											<div class="medio-pago">
												<p>Selecciona el medio de pago</p>
												<label><input class="col-xs-2" name="RadioGroup1" type="radio" value="opción" id="RadioGroup1_0"><img class="col-xs-10" src="assets/images/credito.png" alt="Logo"></label>
												<label><input class="col-xs-2" name="RadioGroup1" type="radio" value="opción" id="RadioGroup1_1"><img class="col-xs-10" src="assets/images/redcompra.png" alt="Logo"></label>
											</div>
										</form>
									</tr>
									<tr>
									  <td colspan="2" align="right"><button type="button" class="btn btn-theme">CONTINUAR COMPRA</button>                                     
									</tr>
								</tbody>
							</table><!--//table-->
						</div><!--//table-responsive-->
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

