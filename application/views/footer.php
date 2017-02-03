

<section id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head"> Menu principal</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#about">Acceuil</a></li>
                            <li><a href="#service">Service</a></li>
                          
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                   <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Liens utiles</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            
                            
                            <li><a href="#">Les questions les plus frequentes</a></li>
                        </ul>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Useful Links</h3>
                    <div class="footer_menu">
                        <ul>
                            
                        </ul>
                    </div>
                </div>
          
                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Nous contactez</h3>
                    <div class="footer_menu_contact">
                        <ul>
                            <li> <i class="fa fa-home"></i>
                                <span> Abidjan Cote d'ivoire </span></li>
                            <li><i class="fa fa-globe"></i>
                                <span> +22547710853</span></li>
                            <li><i class="fa fa-phone"></i>
                                <span> info@barashap.com</span></li>
                            <li><i class="fa fa-map-marker"></i>
                            <span> www.barashap.com</span></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer_bottom">
                        <p class="text-block"> &copy; Copyright Tout droit reserve a <span>Barashap </span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-rss"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Footer Area End -->



<!-- Back To Top Button -->
       <!--  <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
            </div> -->
    <div id="back-top">
        <a href="#slider_part" class="scroll" data-scroll>
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
        </a>
    </div>
    <!-- End Back To Top Button -->



<!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
         <script src="<?php echo base_url();?>styles/js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script src="<?php echo base_url();?>styles/js/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="<?php echo base_url();?>styles/js/jquery.isotope.js"></script>
        <!-- Pretty Photo -->
		<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.prettyPhoto.js"></script>
        <!-- SmoothScroll -->
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/smooth-scroll.js"></script>
        <!-- Image Fancybox -->
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Counter  -->
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/waypoints.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.easing.1.3.js"></script>
   		<!-- PrettyPhoto -->
        <script src="<?php echo base_url();?>styles/js/jquery.singlePageNav.js"></script>
      	<!-- Wow Animation -->
        <script type="<?php echo base_url();?>styles/js/javascript" src="js/wow.min.js"></script>
        <!-- Google Map  Source -->
        <script type="text/javascript" src="<?php echo base_url();?>styles/js/gmaps.js"></script>
			<!-- Custom js -->
        <script src="<?php echo base_url();?>styles/js/custom.js"></script>
	<script>
		// Google Map - with support of gmaps.js
     var map;
        map = new GMaps({
          div: '#map',
           lat:  5.3416555,
          lng:-4.0499032 ,
          scrollwheel: false,
          panControl: false,
          zoomControl: true,
        });

        map.addMarker({
                lat:  5.3416555,
          lng:-4.0499032 ,
          title: 'barashap',
          infoWindow: { 
            content: '<p> Cote divoire, abidjan Cocody</p>'
          },
          icon: "<?php echo base_url();?>styles/images/map1.png"
        });
      	</script>
 
    </body>
</html>
