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
                    <h1 class="heading-title pull-left">Tablas</h1>
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <aside class="page-sidebar col-md-2 col-sm-4 affix-top">                    
                            <section class="widget">
                                <ul class="nav">
                                    <li><a href="tipografias.php">Tipografias</a></li>
                                    <li class="active"><a href="tablas.php">Tablas</a></li>
                                    <li><a href="botones.php">Botones</a></li>
                                    <li><a href="componentes.php">Componentes</a></li>
                                    <li><a href="iconos.php">Iconos</a></li>
									<li><a href="formularios.php">Formularios</a></li>
                                </ul>                    
                            </section><!--//widget-->
                        </aside><!--//page-sidebar-->
                        <div class="content-wrapper col-md-10 col-sm-8">  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Tablas</h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Tabla básicas</h3>   
                                        <div class="table-responsive">                    
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Striped row</h3>   
                                        <div class="table-responsive">                      
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->
                                    </div>
                                </div><!--//row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Hover row</h3>
                                        <div class="table-responsive">                      
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                </tbody>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Tabla condensada</h3> 
                                        <div class="table-responsive">                        
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->
                                    </div>
                                </div><!--//row-->
                                <h3 class="has-divider text-highlight">Tabla bordes</h3>
                                <div class="table-responsive">                      
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td><span class="label label-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td><span class="label label-danger">Rejected</span></td>
                                            </tr>
                                        </tbody>
                                    </table><!--//table-->
                                </div><!--//table-responsive-->
                                <h3 class="has-divider text-highlight">Tabla caja</h3>
                                <div class="table-responsive">                      
                                    <table class="table table-boxed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td><span class="label label-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td><span class="label label-danger">Rejected</span></td>
                                            </tr>
                                        </tbody>
                                    </table><!--//table-->
                                </div><!--//table-responsive-->                            
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

