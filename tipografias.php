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
                    <h1 class="heading-title pull-left">TIPOGRAFIAS</h1>
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <aside class="page-sidebar col-md-2 col-sm-4 affix-top">                    
                            <section class="widget">
                                <ul class="nav">
                                    <li class="active"><a href="tipografias.php">Tipografias</a></li>
                                    <li><a href="tablas.php">Tablas</a></li>
                                    <li><a href="botones.php">Botones</a></li>
                                    <li><a href="componentes.php">Componentes</a></li>
                                    <li><a href="iconos.php">Iconos</a></li>
									<li><a href="formularios.php">Formularios</a></li>
                                </ul>                                        
                            </section><!--//widget-->
                        </aside><!--//page-sidebar-->
                        <div class="content-wrapper col-md-10 col-sm-8">  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Tipografías</h1>                       
                                <h1>h1. Heading 1 <small>Secondary text</small></h1>
                                <h2>h2. Heading 2 <small>Secondary text</small></h2> 
                                <h3>h3. Heading 3 <small>Secondary text</small></h3>
                                <h4>h4. Heading 3 <small>Secondary text</small></h4> 
                                <h5>h5. Heading 3 <small>Secondary text</small></h5> 
                                <h6>h6. Heading 3 <small>Secondary text</small></h6> 
                            </div><!--//page-row--> 
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Parrafos</h1>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a elit id nunc aliquam dignissim vitae sed nunc. </p>
                                <p>Nunc et tortor quis nunc gravida hendrerit eu ut mauris. Mauris pulvinar elit ut blandit dignissim. Maecenas vel rutrum elit. Curabitur vitae nunc sit amet lectus rhoncus rhoncus.</p>
                                <p>Mauris ut est at turpis pulvinar imperdiet. <strong>Nam vulputate</strong> imperdiet enim eu faucibus. Maecenas sit amet felis nulla. <a href="#">Quisque vulputate tortor a magna</a> feugiat scelerisque. Maecenas et magna a mauris semper consectetur. Sed eget erat et arcu dignissim pellentesque eget ac nisi.</p>   
                                <p><em>Fusce in velit felis. Praesent rhoncus eget lacus sed egestas. Ut tincidunt a diam at dapibus.</em></p>
                                <p><small>Fusce in velit felis. Praesent rhoncus eget lacus sed egestas.</small></p>
                                <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                                <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                            </div><!--//page-row-->   
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Listas</h1>
                                <div class="row">
                                    <div class="col-md-6">
                                       <h3 class="has-divider text-highlight">Unordered List</h3>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet.</li>
                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                            <li>Ultricies eget vel aliquam libero.
                                                <ul>
                                                    <li>Turpis pulvinar</li>
                                                    <li>Feugiat scelerisque</li>
                                                    <li>Ut tincidunt</li>
                                                </ul>
                                            </li>
                                            <li>Pellentesque habitant morbi.</li>
                                            <li>Praesent dapibus, neque id cursus.</li>
                                        </ul> 
                                    </div>
                                    <div class="col-md-6">
                                       <h3 class="has-divider text-highlight">Ordered List</h3>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet.</li>
                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                            <li>Ultricies eget vel aliquam libero.
                                                <ol>
                                                    <li>Turpis pulvinar</li>
                                                    <li>Feugiat scelerisque</li>
                                                    <li>Ut tincidunt</li>
                                                </ol>
                                            </li>
                                            <li>Pellentesque habitant morbi.</li>
                                            <li>Praesent dapibus, neque id cursus.</li>
                                        </ol> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <h3 class="has-divider text-highlight">Unstyled List</h3>
                                        <ul class="list-unstyled">
                                            <li>Lorem ipsum dolor sit amet.</li>
                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                            <li>Ultricies eget vel aliquam libero.</li>
                                        </ul> 
                                    </div>
                                    <div class="col-md-6">
                                       <h3 class="has-divider text-highlight">Custom List 1</h3>
                                        <ul class="custom-list-style">
                                            <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet.</li>
                                            <li><i class="fa fa-check"></i>Aliquam tincidunt mauris eu risus.</li>
                                            <li><i class="fa fa-check"></i>Ultricies eget vel aliquam libero.</li>
                                        </ul> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <h3 class="has-divider text-highlight">Custom List 2</h3>
                                        <ul class="custom-list-style">
                                            <li><i class="fa fa-star"></i>Lorem ipsum dolor sit amet.</li>
                                            <li><i class="fa fa-star"></i>Aliquam tincidunt mauris eu risus.</li>
                                            <li><i class="fa fa-star"></i>Ultricies eget vel aliquam libero.</li>
                                        </ul> 
                                    </div>
                                    <div class="col-md-6">
                                       <h3 class="has-divider text-highlight">Custom List 3</h3>
                                        <ul class="custom-list-style">
                                            <li><i class="fa fa-heart"></i>Lorem ipsum dolor sit amet.</li>
                                            <li><i class="fa fa-heart"></i>Aliquam tincidunt mauris eu risus.</li>
                                            <li><i class="fa fa-heart"></i>Ultricies eget vel aliquam libero.</li>
                                        </ul> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Inline List 1</h3>
                                        <ul class="list-inline">
                                           <li><i class="fa fa-star"></i>Lorem ipsum</li>
                                           <li><i class="fa fa-star"></i>Nulla volutpat</li>
                                           <li><i class="fa fa-star"></i>Phasellus iaculis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Inline List 2</h3>
                                        <ul class="list-inline">
                                           <li><i class="fa fa-check"></i>Lorem ipsum</li>
                                           <li><i class="fa fa-check"></i>Nulla volutpat</li>
                                           <li><i class="fa fa-check"></i>Phasellus iaculis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--//page-row-->   
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Descripciones</h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Horizontal Description</h3>
                                        <dl>
                                            <dt>Description lists</dt>
                                            <dd>A description list is perfect for defining terms.</dd>
                                            <dt>Euismod</dt>
                                            <dd>Vestibulum id ligula porta felis.</dd>
                                            <dt>Malesuada porta</dt>
                                            <dd>Etiam porta sem malesuada.</dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="has-divider text-highlight">Vertical Description</h3>
                                        <dl class="dl-horizontal">                                          
                                            <dt>Description lists</dt>
                                            <dd>A description list is perfect for defining terms.</dd>
                                            <dt>Euismod</dt>
                                            <dd>Vestibulum id ligula porta felis.</dd>
                                            <dt>Malesuada porta</dt>
                                            <dd>Etiam porta sem malesuada.</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div><!--//page-row-->  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Bloques</h1>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Nam vulputate imperdiet enim eu faucibus. Maecenas sit amet felis nulla.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <blockquote class="highlight-border">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Nam vulputate imperdiet enim eu faucibus. Maecenas sit amet felis nulla.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <blockquote class="highlight-border boxy">
                                    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Nam vulputate imperdiet enim eu faucibus. Maecenas sit amet felis nulla.</em></p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <blockquote class="highlight-border">
                                    <p class="text-highlight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Nam vulputate imperdiet enim eu faucibus. Maecenas sit amet felis nulla.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <blockquote class="custom-quote">
                                    <p><i class="fa fa-quote-left"></i>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
                                    <p class="people"><span class="name">Someone famous</span><br><span class="title">Source Title</span></p>
                                </blockquote>
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

