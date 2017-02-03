<?php include('header.php');?>

  <section id="home" class="hero landing hero-section">
        <div class="video-background-container">
            <video preload="auto" autoplay loop muted class="video-background">
                <source type="video/mp4" src="<?php echo base_url();?>styles/videos/gdrive.mp4" />
                <source type="video/ogg" src="<?php echo base_url();?>styles/videos/gdrive.ogv" />
                <source type="video/webm" src="<?php echo base_url();?>styles/videos/gdrive.webm" />
            </video>
        </div> 

        <div class="parallax-overlay"></div>

        <div class="container">
            <div class="hero-content text-center">
                <div class="hero-text wow fadeIn" data-wow-delay=".8s">
                    <h3 class="hero-title"><span>BARASHAP</span> Connectez vous pour Trouver le professionnels dont vous avez besoin </h3>
                    <p class="hero-description">Facile et  simple a utiliser</p>
                    <p class="hero-buttons">
                        <a href="index.php/user_authentication/lister" class="btn btn-dark">
                            <strong>En savoir plus </strong> </i>
                        </a>
                         <a href="<?php echo base_url().'user_authentication' ?>" class="btn btn-main featured">
                            <strong>Se connecter </strong> </i>
                        </a>

                    </p>
                </div><!--/ Hero text end -->
            </div><!--/ Hero content end -->
        </div><!--/ Container end -->
    </section><!--/ Home end -->

     <section id="service">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title">Nos <b>Services</b></h3>
                            <h4 class="feature_sub">Nos traveaux vont du plus grand au plus petits des services  <br>que l'on peux demander a un professionnel</h4>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
                <div class="row">
                    <div class="main_feature text-center">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-lightbulb-o"></i>
                                    <h5>Electricité</h5>
                                    <p>You can not ignore mobile devices anymore and with this theme all your visitors will be very pleased how they see your website.</p>
                                    <button class="btn btn-main"> En savoir plus</button>
                                </div>
                            </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-home"></i>
                                    <h5>traveaux menagers</h5>
                                    <p>This theme integrates with WordPress in the most awesome way! Functionality is separated from style through uncreadble useful for user. </p>
                                    <button class="btn btn-main">  En savoir plus</button>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-car"></i>
                                    <h5>Chauffeur</h5>
                                    <p>Full Time support. Very much helpful and possesive at the same time. With all this in mind you won’t be outdated anytime soon. Really!! </p>
                                    <button class="btn btn-main">  En savoir plus</button>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-desktop"></i>
                                    <h5>Ultra Responsive</h5>
                                    <p>Shadow is as optimized as it gets. No useless wrappers, no double headings, everything is coded with SEO in mind. Content is KING! </p>
                                    <button class="btn btn-main">  En savoir plus</button>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <!-- <button class="btn btn-main"> Read More</button> -->
                    </div>
            </div>  <!-- Row End -->
        </div>  <!-- Container End -->
    </section>
   


<section id="testimonial" class="wow fadeInUp">
   <?php include("view_home.php"); ?>
</section> <!-- Section Testimonial End -->

 

<section id="contact">
    <div class="container">
        <div class="row">
  			<div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Restons  <b>en contact</b></h3>
                    <h4 class="feature_sub">Contactez nous pour tous vos preocupations </h4>
                    <div class="divider"></div>
                </div>
  			</div>
        </div>
        <?php echo form_open('index.php/mail/'); ?>
        <div class="row">
             <div class="contact_full">
                <div class="col-md-6 left">
                    <div class="left_contact">
                        
                            <div class="form-level">
                                <input name="name" placeholder="Nom" id="name"  value="" type="text" class="input-block">
                                <span class="form-icon fa fa-user"></span>
                            </div>
                            <div class="form-level">
                                <input name="email" placeholder="Email" id="mail" class="input-block" value="" type="email">
                                <span class="form-icon fa fa-envelope-o"></span>
                            </div>
                            <div class="form-level">
                                <input name="tel" placeholder="Telephone" id="phone" class="input-block" value="" type="text">
                                <span class="form-icon fa fa-phone"></span>
                            </div>
                        
                    </div>
                </div>

                <div class="col-md-6 right">
                    <div class="form-level">
                        <textarea name="message" id="messege"  rows="5" class="textarea-block" placeholder="message"></textarea>
                        <span class="form-icon fa fa-pencil"></span>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-main featured">Envoyer</button>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>





<?php include('footer.php');?>