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
                    <h1 class="heading-title pull-left">COMPONENTES</h1>
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <aside class="page-sidebar col-md-2 col-sm-3 affix-top">                    
                            <section class="widget">
                                <ul class="nav">
                                    <li><a href="tipografias.php">Tipografias</a></li>
                                    <li><a href="tablas.php">Tablas</a></li>
                                    <li><a href="botones.php">Botones</a></li>
                                    <li class="active"><a href="componentes.php">Componentes</a></li>
                                    <li><a href="iconos.php">Iconos</a></li>
									<li><a href="formularios.php">Formularios</a></li>
                                </ul>                     
                            </section><!--//widget-->
                        </aside><!--//page-sidebar-->
                        <div class="content-wrapper col-md-10 col-sm-9">  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Labels</h1>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Basic</h3> 
                                        <p><span class="label label-theme">Theme Label</span></p>
                                        <p><span class="label label-default">Default Label</span></p>
                                        <p><span class="label label-primary">Primary Label</span></p>
                                        <p><span class="label label-success">Success Label</span></p>
                                        <p><span class="label label-info">Info Label</span></p>
                                        <p><span class="label label-warning">Warning Label</span></p>
                                        <p><span class="label label-danger">Danger Label</span></p>                                 
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">With Icon</h3>  
                                        <p><span class="label label-theme"><i class="fa fa-star"></i>Theme Label</span></p>
                                        <p><span class="label label-default"><i class="fa fa-heart"></i>Default Label</span></p>
                                        <p><span class="label label-primary"><i class="fa fa-leaf"></i>Primary Label</span></p>
                                        <p><span class="label label-success"><i class="fa fa-check-circle"></i>Success Label</span></p>
                                        <p><span class="label label-info"><i class="fa fa-info-circle"></i>Info Label</span></p>
                                        <p><span class="label label-warning"><i class="fa fa-check-circle"></i>Warning Label</span></p>
                                        <p><span class="label label-danger"><i class="fa fa-wrench"></i>Danger Label</span></p>                                                                        
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Icons only</h3>  
                                        <p><span class="label label-theme label-icon-only"><i class="fa fa-star"></i></span></p>
                                        <p><span class="label label-default label-icon-only"><i class="fa fa-heart"></i></span></p>
                                        <p><span class="label label-primary label-icon-only"><i class="fa fa-leaf"></i></span></p>
                                        <p><span class="label label-success label-icon-only"><i class="fa fa-check-circle"></i></span></p>
                                        <p><span class="label label-info label-icon-only"><i class="fa fa-info-circle"></i></span></p>
                                        <p><span class="label label-warning label-icon-only"><i class="fa fa-check-circle"></i></span></p>
                                        <p><span class="label label-danger label-icon-only"><i class="fa fa-wrench"></i></span></p>                                                                        
                                    </div> 
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Badges</h3>  
                                        <p><a href="#">Inbox <span class="badge badge-theme">42</span></a></p>
                                        <p><a href="#">Inbox <span class="badge badge-default">36</span></a></p>
                                        <p><a href="#">Inbox <span class="badge badge-primary">18</span></a></p>
                                        <p><a href="#">Inbox <span class="badge badge-success">32</span></a></p>
                                        <p><a href="#">Inbox <span class="badge badge-info">19</span></a></p>
                                        <p><a href="#">Inbox <span class="badge badge-warning">28</span></a></p>
                                        <p><a href="#">Inbox <span class="badge badge-danger">24</span></a></p>                                                                                                           
                                    </div> 
                                        
                                </div><!--//row-->  
                                <h1 class="has-divider text-highlight">Promo Badges</h1>
                                <div class="row box">
                                    <div class="col-md-3 col-sm-4" >
                                        <p class="promo-badge">
                                            <a class="RedDamask" href="#">
                                                <span class="percentage">20% <span class="off">OFF</span></span>                    
                                                <br>
                                                <span class="desc">Online application</span>                  
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-sm-4" >
                                        <p class="promo-badge">
                                            <a class="OliveDrab" href="#">
                                                <span class="percentage">20% <span class="off">OFF</span></span>                    
                                                <br>
                                                <span class="desc">Online application</span>                  
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-sm-4" >
                                        <p class="promo-badge">
                                            <a class="FireBush" href="#">
                                                <span class="percentage">20% <span class="off">OFF</span></span>                    
                                                <br>
                                                <span class="desc">Online application</span>                  
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-sm-4" >
                                        <p class="promo-badge">
                                            <a class="Mojo" href="#">
                                                <span class="percentage">20% <span class="off">OFF</span></span>                    
                                                <br>
                                                <span class="desc">Online application</span>                  
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <h1 class="has-divider text-highlight">Alerts</h1>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">  
                                        <h3 class="has-divider text-highlight">Basic</h3>                              
                                        <div class="alert alert-success">
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-info">
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning">
                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-danger">
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>                                    
                                    </div>
                                    <div class="col-md-6 col-sm-6">  
                                        <h3 class="has-divider text-highlight">Dismissable</h3>                                 
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                        </div>
                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Warning!</strong> Best check yo self, you're <a href="#" class="alert-link">not looking too good</a>.
                                        </div>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                        </div>                            
                                    </div>
                                </div><!--//row-->   
                                <h1 class="has-divider text-highlight">Progress Bars</h1>
                                <div class="row" >
                                    
                                    <div class="col-md-6 col-sm-6"> 
                                        <h3 class="has-divider text-highlight">Basic</h3>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only">40% Complete (theme)</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete (info)</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6"> 
                                        <h3 class="has-divider text-highlight">Striped</h3>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>                                
                                    </div>
                                </div>
                                <h3 class="has-divider text-highlight">Stacked</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 35%">
                                        <span class="sr-only">35% Complete (success)</span>
                                    </div>
                                    <div class="progress-bar progress-bar-warning" style="width: 20%">
                                        <span class="sr-only">20% Complete (warning)</span>
                                    </div>
                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                    <span class="sr-only">10% Complete (danger)</span>
                                    </div>
                                </div>                                        
                            </div><!--//page-row--> 
                            <h1 class="has-divider text-highlight">Boxes</h1>
                            
                            <div class="row page-row">
                                <div class="col-md-6 col-sm-6">  
                                    <h3 class="has-divider text-highlight">Basic</h3>  
                                    <div class="box">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a sem sagittis, aliquet lorem et, tincidunt mi. Maecenas pretium eget mi non sollicitudin. Nam feugiat elit tempor erat varius, et faucibus mauris faucibus. Aliquam ut tincidunt ipsum. Etiam massa ipsum.
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">  
                                    <h3 class="has-divider text-highlight">With Border</h3>  
                                    <div class="box box-border">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a sem sagittis, aliquet lorem et, tincidunt mi. Maecenas pretium eget mi non sollicitudin. Nam feugiat elit tempor erat varius, et faucibus mauris faucibus. Aliquam ut tincidunt ipsum. Etiam massa ipsum.
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">  
                                    <h3 class="has-divider text-highlight">Dark</h3>  
                                    <div class="box box-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a sem sagittis, aliquet lorem et, tincidunt mi. Maecenas pretium eget mi non sollicitudin. Nam feugiat elit tempor erat varius, et faucibus mauris faucibus. Aliquam ut tincidunt ipsum. Etiam massa ipsum.
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">  
                                    <h3 class="has-divider text-highlight">Theme</h3>  
                                    <div class="box box-theme">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a sem sagittis, aliquet lorem et, tincidunt mi. Maecenas pretium eget mi non sollicitudin. Nam feugiat elit tempor erat varius, et faucibus mauris faucibus. Aliquam ut tincidunt ipsum. Etiam massa ipsum.
                                    </div>
                                </div>
                            </div>
                            <h1 class="has-divider text-highlight">Panels</h1>
                            <div class="row page-row">
                                <div class="col-md-6 col-sm-6">  
                                    <h3 class="has-divider text-highlight">Basic</h3>  
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac vulputate lorem. Morbi quis commodo diam, vitae tempor arcu. Suspendisse sit amet viverra risus. Fusce laoreet, arcu in pretium iaculis, lectus lectus varius massa, <a href="#">nec rhoncus augue elit id quam</a>.</p> 
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Ultricies eget vel aliquam libero.</li>
                                                <li>Pellentesque habitant morbi.</li>
                                                <li>Praesent dapibus, neque id cursus.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">  
                                    <h3 class="has-divider text-highlight">With Heading/Footer</h3>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Panel heading without title</div>
                                            <div class="panel-body">
                                            Lorem ipsum dolor sit amet.
                                            </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>  
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                        <div class="panel-footer">Panel footer</div>
                                    </div>                                  
                                </div> 
                            </div>      
                            <div class="row page-row" >                                 
                                <div class="col-md-6 col-sm-6">    
                                    <h3 class="has-divider text-highlight">Alternatives</h3>   
                                    <div class="panel panel-theme">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Panel content
                                        </div>
                                    </div>                                
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Panel content
                                        </div>
                                    </div>
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Panel content
                                        </div>
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Panel content
                                        </div>
                                    </div>
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Panel content
                                        </div>
                                    </div>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel title</h3>
                                        </div>
                                        <div class="panel-body">
                                            Panel content
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h3 class="has-divider text-highlight">With Table</h3>  
                                    <div class="panel panel-theme">
                                        <div class="panel-heading">Panel heading</div>
                                        <div class="panel-body">
                                            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Pellentesque luctus ornare nunc.</p>
                                        </div>
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
                                    <div class="panel panel-theme">
                                        <div class="panel-heading">Panel heading</div>
                                        <div class="panel-body">
                                            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
                                            
                                            <ul class="list-inline">
                                               <li><i class="fa fa-star"></i>Lorem ipsum</li>
                                               <li><i class="fa fa-star"></i>Nulla volutpat</li>
                                               <li><i class="fa fa-star"></i>Phasellus iaculis</li>
                                            </ul>
                                        </div>
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
                                        <div class="panel-footer">Panel footer</div>
                                    </div>
                                </div>
                            </div>                                    
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

