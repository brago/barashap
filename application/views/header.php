
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8">
        <title>Barashap</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <!-- CSS
         ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/bootstrap.min.css"/>
         <link rel="stylesheet" href="<?php echo base_url();?>styles/css/bootstrap.css"/>
        <!-- FontAwesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/font-awesome.min.css"/>
        <!-- Animation -->
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/animate.css" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/owl.carousel.css"/>
         <link rel="stylesheet" href="<?php echo base_url();?>styles/css/owl.theme.css"/>
         <!-- Pretty Photo -->
         <link rel="stylesheet" href="<?php echo base_url();?>styles/css/prettyPhoto.css"/>
         <link rel="stylesheet" href="<?php echo base_url();?>styles/css/flexslider.css"/>
         <link rel="stylesheet" href="<?php echo base_url();?>styles/css/red.css"/>
         <link rel="icon" type="image/ico" href="images/logo3.ico" />
		 
		 <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>styles/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>styles/Admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>styles/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>styles/Admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>styles/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		 
		

        <!-- Template styles-->
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/custom.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/responsive.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>styles/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style2.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>

 <body data-spy="scroll" data-target=".navbar-fixed-top">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header id="header" class="navbar-fixed-top navbar-inverse video-menu" role="banner">
    	<div class="container">
        
    		<!-- <div class="row"> -->
                 <div class="navbar-header ">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">barashap</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://localhost/test/">
                                <img src="<?php echo base_url();?>styles/images/logo3.png" alt="" class="img-responsive">
                        </a>
                 </div><!--Navbar header End-->
                 	<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="nav navbar-nav navbar-right ">
                           	<li class="active"> <a href="http://localhost/test/" class="page-scroll">Accueil </a></li>
                            <li><a href="<?php echo base_url().'Liste' ?>" class="page-scroll" >Services</a> </li>
                        
                       
                            <li><a href="#team" class="page-scroll">Notre equipe</a> </li>
                            
                            <li><a href="#contact" class="page-scroll">contactez-nous</a> </li>

                            <?php
                               if (isset($this->session->userdata['logged_in'])) {
                                    $username = ($this->session->userdata['logged_in']['username']);
                                    $email = ($this->session->userdata['logged_in']['email']);
                                    $image = ($this->session->userdata['logged_in']['photo']);

                                     ?>
                                     <li><a href="<?php echo base_url().'publier' ?>" class="page-scroll">Publier une annonce</a> </li>
                                       <li><a href="<?php echo base_url().'compte' ?>" class="page-scroll">Mon compte</a> </li>
                                     <!--  <li><a href="<?php echo base_url().'emplois' ?>" class="page-scroll">Postuler</a> </li>-->
                                    <li><a href="<?php echo base_url().'deconnexion' ?>" class="page-scroll">Deconnexion</a> </li>
                                     <img src="<?php echo base_url() ?>upload/<?=$image ?>" class="img-circle" alt="Cinque Terre" width="20" height="20">
                                      <?php 
                                         }else{
                                            ?> 
                                         
                                        <li><a href="<?php echo base_url().'user_authentication' ?>" class="page-scroll">Connexion</a> </li>
                                           <?php
                                         }

                                          ?>
                        </ul>
                     </nav>
                </div><!-- /.container-fluid -->

                <!-- Advanced Modal -->
<div id="advanced" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="advancedSort" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <ul class="nav nav-pills pull-right">
          <li class="active">
            <a href="#date" data-toggle="pill">Date</a>
          </li>
          <li><a href="#relevance" data-toggle="pill">Relevance</a></li>
          <li><a href="#dealership" data-toggle="pill">Dealership</a></li>
        </ul>
        <h4>Advanced Sort</h4>  
    </div>
    <div class="modal-body">
      <div class="row-fluid">
            <div class="tab-content">
                <div class="tab-pane active" id="date">
                    <form>
                      <div class="controls controls-row">
                        <select>
                            <option>Date</option>
                            <option>Today</option>
                            <option>Yesterday</option>
                            <option>Last Week</option>
                            <option>Last Month</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-warning">Sort</button>
                    </form>
                </div>
                <div class="tab-pane" id="relevance">
                    <form>
                      <fieldset>
                        <div class="controls controls-row">
                            <select class="span6">
                                <option value="">Relevance Factor</option>
                                <option value="">Containing</option>
                                <option value="">Starting with</option>
                                <option value="">Enging with</option>
                            </select>
                            <select class="span6">
                                <option value="">Sorting</option>
                                <option value="">Relevant on top</option>
                                <option value="">Relevant on bottom</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning">Sort</button>
                      </fieldset>
                    </form>
                </div>
                <div class="tab-pane" id="dealership">
                    <form>
                      <fieldset>
                        <div class="controls controls-row">
                            <input type="text" class="span8" placeholder="Location">
                            <select class="span4">
                                <option>City</option>
                                <option>Los Angeles</option>
                                <option>Tokyo</option>
                                <option>New York</option>
                                <option>London</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning">Sort</button>
                      </fieldset>
                    </form>
                </div>
            </div>                
      </div>
    </div>
</div>
</header>
