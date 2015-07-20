		<nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header inline-right">
					<div class="row">
						<div class="inline hidden-lg hidden-md hidden-sm col-xs-11" style="margin-right: -7px">
							<aside id="search" style="margin-top: 11px;margin-left: 15px;">
								<form class="navbar-left" role="search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Buscar eventos">
										<span class="input-group-btn"><button class="btn btn-theme ir" type="button"><i class="fa fa-search"></i></button></span>
									</div>
								</form>
							</aside>
						</div>
						<div class="col-xs-1">
							<button class="navbar-toggle navbar-xs navbar-colapsable " type="button" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button><!--//nav-toggle-->
						</div>
					</div>
                </div><!--//navbar-header--> 
				<div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a href="index.php">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Páginas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="evento.php">evento</a></li>
                                <li><a href="resultados.php">resultados</a></li>
                                <li><a href="ingresar.php">ingresar</a></li>
								<li><a href="registro.php">registro</a></li>
								<li><a href="checkout.php">checkout</a></li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Menu Levels <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Submenu Level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="trigger" href="#">Submenu Level 2 <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Submenu Level 3</a></li>
                                            	<li><a href="#">Submenu Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                    </ul>
                                </li>           
                            </ul>
                        </li>
						<li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Frontend <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="dashboard.php">Dashboard</a></li>
								<li><a href="proximos-eventos.php">Mis Tickets</a></li>
								<li><a href="mis-compras.php">Mis compras</a></li>
								<li><a href="detalle-orden.php">Detalle de la orden</a></li>
								<li><a href="informacion-personal.php">Mi cuenta</a></li>
                            </ul>
                        </li>
						<li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Administrador <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="tipografias.php">Tipografias</a></li>
								<li><a href="tablas.php">Tablas</a></li>
								<li><a href="botones.php">Botones</a></li>
								<li><a href="componentes.php">Componentes</a></li>
								<li><a href="iconos.php">Iconos</a></li>
								<li><a href="formularios.php">Formularios</a></li>
                            </ul>
                        </li>
                    </ul><!--//nav-->
					<form class="pull-right search-form hidden-xs" role="search">
                        <div class="form-group busqueda">
                            <input type="text" class="form-control" placeholder="Buscar eventos">
                        </div>
                        <button type="submit" class="btn btn-theme ir">Ver</button>
                    </form>  
                </div><!--//navabr-collapse-->
			</div><!--//container-->
        </nav><!--//main-nav-->