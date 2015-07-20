<!DOCTYPE html>

<!--sdfedfsdfr-->
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
		<!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Administrador</h1>
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <aside class="page-sidebar col-md-2 col-sm-3 affix-top">                    
                            <section class="widget">
                                <ul class="nav">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="tables.html">Tables</a></li>
                                    <li class="active"><a href="buttons.html">Buttons</a></li>
                                    <li><a href="components.html">Components</a></li>
                                    <li><a href="icons.html">Icons</a></li> 
                                </ul>                    
                            </section><!--//widget-->
                        </aside><!--//page-sidebar-->
                        <div class="content-wrapper col-md-10 col-sm-9">  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Buttons</h1>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Basic</h3> 
                                        <ul class="list-unstyled">
                                            <li><button type="button" class="btn btn-theme">Theme Button</button></li>  
                                            <li><button type="button" class="btn btn-default">Default Button</button></li>  
                                            <li><button type="button" class="btn btn-primary">Primary Button</button></li>
                                            <li><button type="button" class="btn btn-success">Success Button</button></li>
                                            <li><button type="button" class="btn btn-info">Info Button</button></li>
                                            <li><button type="button" class="btn btn-warning">Warning Button</button></li>
                                            <li><button type="button" class="btn btn-danger">Danger Button</button></li>
                                            <li><button type="button" class="btn btn-link">Link Button</button></li>
                                        </ul>                                   
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Large</h3>  
                                        <ul class="list-unstyled">
                                            <li><button type="button" class="btn btn-theme btn-lg">Theme Button</button></li>  
                                            <li><button type="button" class="btn btn-default btn-lg">Default Button</button></li>  
                                            <li><button type="button" class="btn btn-primary btn-lg">Primary Button</button></li>
                                            <li><button type="button" class="btn btn-success btn-lg">Success Button</button></li>
                                            <li><button type="button" class="btn btn-info btn-lg">Info Button</button></li>
                                            <li><button type="button" class="btn btn-warning btn-lg">Warning Button</button></li>
                                            <li><button type="button" class="btn btn-danger btn-lg">Danger Button</button></li>
                                            <li><button type="button" class="btn btn-link btn-lg">Link Button</button></li>
                                        </ul>                                    
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Small</h3>   
                                        <ul class="list-unstyled">
                                            <li><button type="button" class="btn btn-theme btn-sm">Theme Button</button></li>  
                                            <li><button type="button" class="btn btn-default btn-sm">Default Button</button></li>  
                                            <li><button type="button" class="btn btn-primary btn-sm">Primary Button</button></li>
                                            <li><button type="button" class="btn btn-success btn-sm">Success Button</button></li>
                                            <li><button type="button" class="btn btn-info btn-sm">Info Button</button></li>
                                            <li><button type="button" class="btn btn-warning btn-sm">Warning Button</button></li>
                                            <li><button type="button" class="btn btn-danger btn-sm">Danger Button</button></li>
                                            <li><button type="button" class="btn btn-link btn-sm">Link Button</button></li>
                                        </ul>                                    
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h3 class="has-divider text-highlight">Extra small</h3>  
                                        <ul class="list-unstyled">
                                            <li><button type="button" class="btn btn-theme btn-xs">Theme Button</button></li>  
                                            <li><button type="button" class="btn btn-default btn-xs">Default Button</button></li>  
                                            <li><button type="button" class="btn btn-primary btn-xs">Primary Button</button></li>
                                            <li><button type="button" class="btn btn-success btn-xs">Success Button</button></li>
                                            <li><button type="button" class="btn btn-info btn-xs">Info Button</button></li>
                                            <li><button type="button" class="btn btn-warning btn-xs">Warning Button</button></li>
                                            <li><button type="button" class="btn btn-danger btn-xs">Danger Button</button></li>
                                            <li><button type="button" class="btn btn-link btn-xs">Link Button</button></li>
                                        </ul>                                  
                                    </div>
                                </div><!--//row-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3 class="has-divider text-highlight">Call to Action</h3> 
                                        <p><button type="button" class="btn btn-cta"><i class="fa fa-play-circle"></i>Apply Now</button></p>
                                        <p><button type="button" class="btn btn-cta"><i class="fa fa-play-circle"></i>Purchase Now</button></p>
                                        <p><button type="button" class="btn btn-cta"><i class="fa fa-play-circle"></i>Join Now</button></p>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h3 class="has-divider text-highlight">Block Level</h3> 
                                        <p><button type="button" class="btn btn-primary btn-block btn-lg">Block Level Button (Large)</button></p>
                                        <p><button type="button" class="btn btn-success btn-block">Block Level Button (Basic)</button></p>
                                        <p><button type="button" class="btn btn-warning btn-block btn-sm">Block Level Button (Small)</button></p>
                                        <p><button type="button" class="btn btn-danger btn-block btn-xs">Block Level Button (Extra small)</button></p>
                                    </div>
                                </div><!--//row--> 
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3 class="has-divider text-highlight">Disabled</h3> 
                                            <p><button type="button" class="btn btn-theme disabled">Theme Button</button></p> 
                                            <p><button type="button" class="btn btn-default disabled">Default Button</button></p>  
                                            <p><button type="button" class="btn btn-primary disabled">Primary Button</button></p>
                                            <p><button type="button" class="btn btn-success disabled">Success Button</button></p>
                                            <p><button type="button" class="btn btn-info disabled">Info Button</button></p>
                                            <p><button type="button" class="btn btn-warning disabled">Warning Button</button></p>
                                            <p><button type="button" class="btn btn-danger disabled">Danger Button</button></p>
                                            <p><button type="button" class="btn btn-link disabled">Link Button</button></p>                                </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h3 class="has-divider text-highlight">With Icons</h3> 
                                        <p><button type="button" class="btn btn-primary"><i class="fa fa-heart"></i>Primary Button</button></p>
                                        <p><button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i>Success Button</button></p>
                                        <p><button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i>Info Button</button></p>
                                        <p><button type="button" class="btn btn-warning"><i class="fa fa-warning"></i>Warning Button</button></p>
                                        <p><button type="button" class="btn btn-danger"><i class="fa fa-exclamation-circle"></i>Danger Button</button></p>
                                    </div>
                                </div><!--//row-->                                               
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

