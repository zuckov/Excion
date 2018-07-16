<body>

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					 <div class="navbar-brand">
						<a href="<?php echo base_url(); ?>">
							<!--
							<img class="logo" src="<?php base_url(); ?>content/creative-agency/img/logo.png" alt="logo">
							<img class="logo-alt" src="<?php base_url(); ?>content/creative-agency/img/logo-alt.png" alt="logo">
							-->
							<!--  Logo coba excion -->
						<img class="logo" src="<?php echo base_url(); ?>content/excionlogo1.png" alt="logo">
						<img class="logo-alt" src="<?php echo base_url(); ?>content/logoexcion2putih.png" alt="logo">
					</a>
				 </div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<!--<li><a href="<?php //echo base_url() ?>">Home</a></li> -->
					<li class="has-dropdown"><a href="<?php echo base_url() ?>">Home</a>
						<ul class="dropdown">
							<li><a href="#">Real Time</a></li>
							<li><a href="#">Upload</a></li>
						</ul>
					</li>
					<?php if($this->session->userdata('status') == 'login'){ ?>
						<li><a href="<?php echo base_url('index.php/history/index'); ?>">History</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="<?php echo base_url('index.php/login/logout'/*'index.php/login/logout'*/); ?>">Logout</a></li>
					<?php }else {?>
						<li><a href="<?php echo base_url('index.php/main/about'); ?>">About</a></li>
						<li><a href="#contact" data-toggle="modal" data-target="#modalLogin">Login</a>
					<?php } ?>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- header wrapper -->
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<h2>Results</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="index.html#blog">Blog</a></li>
					<li class="breadcrumb-item active">Single Post</li>
				</ul>
			</div>
		</div>
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->
	<!-- coba konten disini -->

<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <!-- <ul class="nav nav-tabs"> -->
	<ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Pronia</a></li>
    <li><a data-toggle="tab" href="#menu2">Neraca Energi</a></li>
    <li><a data-toggle="tab" href="#menu3">Berita Acara</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
	<!-- konten -->

	<!-- Blog -->
	<div id="blog" class="section md-padding">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">

				<!-- Main --><!--
				<main id="main" class="col-md-9">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo base_url(); ?>content/creative-agency/img/blog-post.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Morbi mattis felis at nunc. Duis viverra</h3>
							<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
						</div>

						<!-- blog tags -->
						<!--
						<div class="blog-tags">
							<h5>Tags :</h5>
							<a href="#"><i class="fa fa-tag"></i>Web</a>
							<a href="#"><i class="fa fa-tag"></i>Design</a>
							<a href="#"><i class="fa fa-tag"></i>Marketing</a>
							<a href="#"><i class="fa fa-tag"></i>Development</a>
							<a href="#"><i class="fa fa-tag"></i>Branding</a>
							<a href="#"><i class="fa fa-tag"></i>Photography</a>
						</div>
						<!-- blog tags -->

						<!-- blog author -->
						<!--
						<div class="blog-author">
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="<?php echo base_url(); ?>content/creative-agency/img/author.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h3>Joe Doe</h3>
										<div class="author-social">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
									<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								</div>
							</div>
						</div>
						<!-- /blog author -->

						<!-- blog comments -->
						<!--
						<div class="blog-comments">
							<h3 class="title">(13) Comments</h3>

							<!-- comment -->
							<!--
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="<?php echo base_url(); ?>content/creative-agency/img/perso2.jpg" alt="">
								</div>
								<div class="media-body">
									<h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
									<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								</div>
							</div>
							<!-- /comment -->

							<!-- comment -->
							<!--
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="<?php echo base_url(); ?>content/creative-agency/img/perso1.jpg" alt="">
								</div>
								<div class="media-body">
									<h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
									<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								</div>

								<!-- author reply comment -->
								<!--
								<div class="media author">
									<div class="media-left">
										<img class="media-object" src="<?php echo base_url(); ?>content/creative-agency/img/perso2.jpg" alt="">
									</div>
									<div class="media-body">
										<h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
										<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
									</div>
								</div>
								<!-- /comment -->

								<!-- reply comment -->
								<!--
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="<?php echo base_url(); ?>content/creative-agency/img/perso2.jpg" alt="">
									</div>
									<div class="media-body">
										<h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
										<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
									</div>
								</div>
								<!-- /comment -->

							</div>
							<!-- /comment -->


							<!-- comment -->
							<!--
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="<?php echo base_url(); ?>content/creative-agency/img/perso.jpg" alt="">
								</div>
								<div class="media-body">
									<h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
									<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								</div>
							</div>
							<!-- /comment -->

						</div>
						<!-- /blog comments -->

						<!-- reply form -->
						<!--
						<div class="reply-form">
							<h3 class="title">Leave a reply</h3>
							<form>
								<input class="input" type="text" placeholder="Name">
								<input class="input" type="email" placeholder="Email">
								<textarea placeholder="Add Your Commment"></textarea>
								<button type="submit" class="main-btn">Submit</button>
							</form>
						</div>
						<!-- /reply form -->
					</div>
				</main>
				<!-- /Main -->


				<!-- Aside -->
				<!--
				<aside id="aside" class="col-md-3">

					<!-- Search -->
					<!--
					<div class="widget">
						<div class="widget-search">
							<input class="search-input" type="text" placeholder="search">
							<button class="search-btn" type="button"><i class="fa fa-search"></i></button>
						</div>
					</div>
					<!-- /Search -->

					<!-- Category -->
					<!--
					<div class="widget">
						<h3 class="title">Category</h3>
						<div class="widget-category">
							<a href="#">Web Design<span>(7)</span></a>
							<a href="#">Marketing<span>(142)</span></a>
							<a href="#">Web Development<span>(74)</span></a>
							<a href="#">Branding<span>(60)</span></a>
							<a href="#">Photography<span>(5)</span></a>
						</div>
					</div>
					<!-- /Category -->

					<!-- Posts sidebar -->
					<!--
					<div class="widget">
						<h3 class="title">Populare Posts</h3>

						<!-- single post -->
						<!--
						<div class="widget-post">
							<a href="#">
								<img src="<?php echo base_url(); ?>content/creative-agency/img/post1.jpg" alt=""> Blog title goes here
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<!--
						<div class="widget-post">
							<a href="#">
								<img src="<?php echo base_url(); ?>content/creative-agency/img/post2.jpg" alt=""> Blog title goes here
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->


						<!-- single post -->
						<!--
						<div class="widget-post">
							<a href="#">
								<img src="<?php echo base_url(); ?>content/creative-agency/img/post3.jpg" alt=""> Blog title goes here
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

					</div>
					<!-- /Posts sidebar -->

					<!-- Tags -->
					<!--
					<div class="widget">
						<h3 class="title">Tags</h3>
						<div class="widget-tags">
							<a href="#">Web</a>
							<a href="#">Design</a>
							<a href="#">Graphic</a>
							<a href="#">Marketing</a>
							<a href="#">Development</a>
							<a href="#">Branding</a>
							<a href="#">Photography</a>
						</div>
					</div>
					<!-- /Tags -->

				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->
