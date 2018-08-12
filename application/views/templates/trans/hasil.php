<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
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
    ================================================== -->
    <link rel="stylesheet" href="<?php base_url(); ?>content/bs/bs4/css/bootstrap.min.css" />
    <script src="<?php base_url(); ?>content/bs/bs4/css/bootstrap.min.js"></script>

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

            <div class="header-nav__content">
              <?php if($this->session->userdata('status') == 'login'){ ?>
                <h3>Selamat datang, <?php echo $this->session->userdata('nama'); ?></h3>
              <?php }else {?>
                <h3>Project Excion</h3>
              <?php } ?>
                <ul class="header-nav__list">
                    <li><a class="smoothscroll"  href="#home" title="home">Login</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
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

        <a class="header-menu-toggle" href="#0" >
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->



    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
              <a href="#" onclick="history.back(-1)" class="subhead">Kembali ke halaman utama</a>
                <!-- <h3 class="subhead">Hasil</h3> -->
                <!-- <input type="button" class="subhead" value="Kembali" onclick="history.back(-1)"> -->
                <br><br><br><h1 class="display-1">Hasil olah data</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                  Berikut adalah hasil perhitungan dari proses olah data.</p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row">

            <div class="about-process process block-1-2 block-tab-full">

                <div class="process__vline-left"></div>
                <div class="process__vline-right"></div>

                <a href="<?php echo base_url('index.php/csv/pronia_default_2/PBS-1.csv'); ?>"><input name="subscribe" id="excion_default"  value="Pronia 1" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>
                <a href="<?php echo base_url('index.php/csv/pronia_default_2/PBS-2.csv'); ?>"><input name="subscribe" id="excion_default"  value="Pronia 2" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>
                <a href="<?php echo base_url('index.php/csv/pronia_default_2/PBS-3.csv'); ?>"><input name="subscribe" id="excion_default"  value="Pronia 3" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>
              <!--  <a href="<?php echo base_url('index.php/csv/baRegion_default'); ?>"><input name="subscribe" id="excion_default"  value="BA PBS" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>
                 <a href="<?php echo base_url('index.php/csv/get_bakv_default'); ?>"><input name="subscribe" id="excion_default"  value="BA Kvar" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>
 -->
                <a href="<?php echo base_url('index.php/csv/get_bapbs_model'); ?>"><input name="subscribe" id="excion_default"  value="BA Kvar" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>

                <a href="<?php echo base_url('index.php/csv/get_bakv_model'); ?>"><input name="subscribe" id="excion_default"  value="BA Kvar" type="submit" style="color: #ffffff; background: #cc147f; border-color: #cc147f"></a>

            </div> <!-- end process -->

        </div> <!-- end about-stats -->

    </section> <!-- end s-about -->







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
