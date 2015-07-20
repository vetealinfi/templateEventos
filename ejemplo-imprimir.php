<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
	include('head.php');
?>
<body>
	<div class="">
        <!-- ******HEADER****** --> 
        <div class="">
			<?php
				include('header.php');
			?>
		</div>
		<!-- ******CONTENT****** -->
		
		<div class="gris-2">		
			<div class="content container">
				<p><a href="javascript:imprSelec('muestra')">Imprimir Tabla</a></p>

				<div id="muestra"> 
					<table class="table table-bordered blanco">
						<tbody>
							<tr>
								<td class="hidden-xs" width="50%" rowspan="4">Código QR desktop</td>
								<td width="50%" class="hidden-lg hidden-md hidden-sm">Código QR mobile</td>
							</tr>
							<tr>
							  <td><h6>Asistente</h6>
								<h3>Camilo Antonio Galvez Romo</h3>
							  <h4>camilogalvezromo@gmail.com</h4></td>
						  </tr>
							<tr>
							  <td width="50%"><h6>Evento</h6>
							  <h3>GDG en Google Chile</h3></td>
						  </tr>
							<tr>
							  <td class="hidden-lg hidden-md hidden-sm"><h6>Ticket</h6>
							  <h3>General</h3></td>
						  </tr>
							<tr>
								<td class="hidden-xs"><h6>Ticket</h6>
							  <h3>General</h3></td>
							  <td><h6>Cuándo</h6>
							  <h3>6 de julio de 2015 6:30 PM</h3></td>
							</tr>
							<tr>
								<td class="hidden-xs" rowspan="2">
									<h6>Nota</h6>
									<h5>Oficinas Google Chile Parque Titanium Torre B</h5></td>
							  <td><h6>Ubicación</h6>
									<h5>Oficinas Google Chile piso 16 torre B Parque Titanium, Av Costanera Sur 2730, Las Condes, Chile</h5>
							  </td>
						  </tr>
							<tr>
								<td class="hidden-lg hidden-md hidden-sm">
									<h6>Nota</h6>
									<h5>Oficinas Google Chile Parque Titanium Torre B</h5></td>
						  </tr>
						</tbody>
					</table><!--//table-->
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function imprSelec(muestra)
		{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
	</script>

</body>
</html>