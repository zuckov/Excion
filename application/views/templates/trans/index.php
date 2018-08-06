<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs warna pink yg dibutuhin : #cc147f
    ================================================== -->
    <meta charset="utf-8">
    <title>Project Excion</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/content/trans/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/content/trans/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/content/trans/css/main.css">

    <!-- bootstrap
    ==================================================-->
    <link rel="stylesheet" href="<?php base_url(); ?>content/bs/bs3/css/bootstrap.min.css">
    <script src="<?php base_url(); ?>content/creative-agency/js/jquery.min.js"></script>
    <script src="<?php base_url(); ?>content/bs/bs3/js/bootstrap.min.js"></script>

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url(); ?>/content/trans/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>/content/trans/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>content/logoexcion2putih.png" alt="Homepage" style="width: 120px; height:auto">
            </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
            <?php if($this->session->userdata('status') == 'login'){ ?>
            <div class="header-nav__content">
                <h3>User : <?php echo $this->session->userdata('nama'); ?></h3>
              <?php }else {?>
                <h3>Project Excion</h3>
            	<?php } ?>

                <ul class="header-nav__list">
                    <?php if($this->session->userdata('status') == 'login'){ ?>
          						<li><a class="smoothscroll" href="<?php echo base_url('index.php/history/index'); ?>">History</a></li>
          						<li><a href="<?php echo base_url('index.php/main/cek_tabelgen2'); ?>">Admin</a></li>
                      <li><a href="#">Profile</a></li>
                      <li><a href="<?php echo base_url('index.php/login/logout'/*'index.php/login/logout'*/); ?>">Logout</a></li>
          						<br>
                      <br>
                      <li><a class="smoothscroll" href="<?php echo base_url('index.php/main/about'); ?>">About</a></li>
          					<?php }else {?>
          						<li><a class="smoothscroll" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
          						<li><a class="smoothscroll" href="<?php echo base_url('index.php/main/about'); ?>">About</a></li>
          					<?php } ?>
                </ul>

                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <div></div>
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>content/trans/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" style="padding-left : 100px; padding-right : auto;">
                <h1>
                Project Excion <br>
                </h1>

                <p>
                <!-- We create stunning digital experiences <br>
                that will help your business stand out. -->
                <?php if($this->session->userdata('status') == 'login'){ ?>
                  <input name="subscribe" data-toggle="modal" data-target="#" value="Excion" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f">
                  <input name="subscribe" data-toggle="modal" data-target="#" value="Upload" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f">
                  <input name="subscribe" data-toggle="modal" data-target="#" value="Realtime - Soon" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f">

                <?php }else {?>
                  <input name="subscribe" data-toggle="modal" data-target="#modalLogin" value="Login" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f">

                <?php } ?>
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#">Fitur Excion :</a></li>
            <li><a class="smoothscroll" href="#">Excion<span>Fungsi default excion</span></a></li>
            <li><a class="smoothscroll" href="#">Excion Upload<span>Fungsi excion dengan fitur upload</span></a></li>
            <li><a  class="smoothscroll" href="#">Excion RT<span>Fungsi excion real-time - eksperimental</span></a></li>
        </ul> <!-- end home-sidelinks -->
<!-- home-social -->  <!--
        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                <i class="fab fa-facebook"></i>
                <span class="home-social-text">Facebook</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-twitter"></i>
                <span class="home-social-text">Twitter</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-linkedin"></i>
                <span class="home-social-text">LinkedIn</span>
            </a></li>
        </ul> <!-- end home-social -->
        <!--
        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a>
        -->

    </section> <!-- end s-home -->

    <!-- Modal
    ================================================== -->
			<div class="modal fade" id="modalLogin" role="dialog">
		    <div class="modal-dialog">

		      <!-- Modal content-->

						<!-- <form role="form"> -->
						<!---->
		      <div class="modal-content">
		        <div class="modal-header" style="padding:35px 50px;">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
							<form action="<?php echo base_url('index.php/login/login'); ?>" id='frm_vld' name='frm_vld' method="post">

		            <div class="form-group">
		              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
									<input type="text" name="username" id="username" class="form-control" placeholder="Username" ><br>
		            </div>
		            <div class="form-group">
		              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Password" >
		            </div>
								<!--
								<div class="checkbox">
		              <label><input type="checkbox" value="" checked>Remember me</label>
		            </div>
								-->
		              <button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>

		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							</form>
							<p>Not a member? <a href="#">Sign Up</a></p>
		          <p>Forgot <a href="#">Password?</a></p>
		        </div>
		      </div>


		    </div>
		  </div>
				<!-- /modal login -->



    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <!----><div class="row section-header" data-aos="fade-up">
            <div class="col-full" style="padding-left : 100px; padding-right : auto;">
                <h3 class="subhead subhead--light">“We don't make mistakes, just happy little accidents.”</h3>
                <h1 class="display-1 display-1--light"></h1>
                <img src="<?php echo base_url(); ?>content/logoexcion2putih.png" alt="Homepage" style="width: 120px; height:auto">
            </div>
        </div>  <!-- end section-header -->


        <div class="row">
            <div class="col-full cl-copyright"style="padding-left : 100px; padding-right : auto;">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p>Developed by K.Armyansyah, Unsoed, © 2018. || Template designed by <a href="https://colorlib.com" target="_blank">Colorlib </a> © 2017. All Rights Reserved. </p></span>
            </div>

        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

    </section> <!-- end s-contact -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url(); ?>/content/trans/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/content/trans/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>/content/trans/js/main.js"></script>

</body>

</html>
