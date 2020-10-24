<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Onyx Jungle, Empowering you for the future...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="{{asset('maxim/css/bootstrap-responsive.css')}}" rel="stylesheet">
	<link href="{{asset('maxim/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('maxim/color/default.css')}}" rel="stylesheet">
	<link rel="shortcut icon" href="{{asset('onyx_icon.png')}}">

</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar bg-dark navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="{{('/')}}"><img class="img img-responsive" src="{{asset('onyx_logo.png')}}" alt="Onyx Jungle" height="70px" width="200px" /></a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="#about">About</a></li>
							<li><a title="services" href="#services">Services</a></li>
							<li><a title="works" href="#works">Works</a></li>
							<li><a title="blog" href="#blog">Blog</a></li>
							<li><a title="contact" href="#contact">Contact</a></li>
							<li><a href="{{route('login')}}">My Account</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="{{asset('onyx_icon.png')}}" alt="Logo" class="img-responsive img" height="170px" width="170px" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content text-danger">
										<strong>create</strong> your future
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										pursue your <strong>dreams</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										Powered by <strong>Technology</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer orange">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						There's huge space of possibilities that lies ahead of you in information technology. <cite>Lankwagh Simmons, Onyx ICT Hub</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Who We Are</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<h2>We are Cultured and Driven by <strong>Wisdom for Witty Inventions</strong> to penerate the thick jungles of Africa.</h2>
						<p>
							As it is, the World is changing very fast and the way things are done is being augmented from manual labour to technology driven approaches. Information dissemination is on the rise but it seems the junglists, those who stay in thick African villages are being left out, although one may argue that they are totally left out there are still many challenges that this remote village dwellers will need solved. We have taken it unto ourselves as a challenge to look into how we can improve information can evenly be distributed by creating awareness and staging empowerment programmes with training sessions that will help these wonderful people.
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img class="img img-responsive" src="{{asset('maxim/img/lab.jpg')}}" alt="Work Station" height="600px" width="auto" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span2 offset1 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="{{asset('maxim/img/team/simmons.jpg')}}" alt="Simmons" />
						<h3>Simmons Lankwagh</h3>
						<p>
							Director
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="{{asset('maxim/img/team/shaibu.jpg')}}" alt="" />
						<h3>Emmanuel Shaibu</h3>
						<p>
							Facilitator
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="{{asset('maxim/img/team/daniel.jpg')}}" alt="" />
						<h3>Daniel Denen</h3>
						<p>
							Auditor
						</p>
					</div>
				</div>
				<!-- <div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-4.jpg" alt="" />
						<h3>Mark Joe</h3>
						<p>
							UI designer
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-5.jpg" alt="" />
						<h3>Stephen B</h3>
						<p>
							Digital imaging
						</p>
					</div> -->
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: services -->
	<section id="services" class="section orange">
		<div class="container">
			<h4>Services</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<img src="{{asset('maxim/img/icons/laptop.png')}}" alt="" />
						<h2>Programming &amp; ICT Training</h2>
						<p>
							We develop software for both businesses and remote jungle development services. We also train individuals create awareness in schools on how to use software and information technology to enhance their ways of doing things.
						</p>
					</div>
				</div>
				<div class="span3 animated flyIn">
					<div class="service-box">
						<img src="{{asset('maxim/img/icons/lab.png')}}" alt="" />
						<h2>Business development</h2>
						<p>
							We help individuals in remote areas to model their businesses by training them and empowering them financially and technically on how to manage these businesses. our aim is to bridge the gap between rural dwellers and commercial dwellers and services available in urban areas
						</p>
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<img src="{{asset('maxim/img/icons/camera.png')}}" alt="" />
						<h2>Tech Gadgets</h2>
						<p>
							We distribute tech gadgets and ict tools to rural dwellers. We also provide training and create awareness for them to know how to use this gadgets to do business and share informattion.
						</p>
					</div>
				</div>
				<div class="span3 animated-slow flyIn">
					<div class="service-box">
						<img src="{{asset('maxim/img/icons/basket.png')}}" alt="" />
						<h2>Ecommerce</h2>
						<p>
							We connect and expose rural farmers to large markets so that they can have a better way of selling their produce through technology platforms like ecommerce websites, social media, blogs and even foster partnerships among large scale farmers with product distributors and manufacturers.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end section: services -->
	<!-- section: works -->
	<section id="works" class="section">
		<div class="container clearfix">
			<h4>Our Works</h4>
			<!-- portfolio filter -->
			<div class="row">
				<div id="filters" class="span12">
					<ul class="clearfix">
						<li>
							<a href="#" data-filter="*" class="active">
								<h5>All</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".web">
								<h5>Web</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".print">
								<h5>Print</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".design">
								<h5>Design</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".photography">
								<h5>Photography</h5>
							</a>
						</li>
					</ul>
				</div>
				<!-- END PORTFOLIO FILTERING -->
			</div>
			<div class="row">
				<div class="span12">
					<div id="portfolio-wrap">
						<!-- portfolio item -->
						<div class="portfolio-item grid print photography">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/1.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/2.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/3.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/4.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/5.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/6.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/7.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/8.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/9.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid design web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/10.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						We are an established and trusted web agency with a reputation for commitment and high integrity
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: blog -->
	<section id="blog" class="section">
		<div class="container">
			<h4>Our Blog</h4>
			<!-- Three columns -->
			<div class="row">
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img1.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 19, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">New design trends</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img2.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 19, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">News</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Retro is great</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img3.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 22, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">Tips</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Isometric mockup</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img4.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 27, 2013</span>
							<span class="tags"><a href="#">News</a>, <a href="#">Tutorial</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Free icon set</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="blankdivider30"></div>
			<div class="aligncenter">
				<a href="#" class="btn btn-large btn-theme">More blog post</a>
			</div>
		</div>
	</section>

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Get in Touch</h4>
			<p>
				Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei
				eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Send message" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; {{ now()->year }} Onyx ICT Hub. All rights reserved.

						</div>
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="{{asset('maxim/js/jquery.js')}}"></script>
	<script src="{{asset('maxim/js/jquery.scrollTo.js')}}"></script>
	<script src="{{asset('maxim/js/jquery.nav.js')}}"></script>
	<script src="{{asset('maxim/js/jquery.localScroll.js')}}"></script>
	<script src="{{asset('maxim/js/bootstrap.js')}}"></script>
	<script src="{{asset('maxim/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('maxim/js/isotope.js')}}"></script>
	<script src="{{asset('maxim/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('maxim/js/inview.js')}}"></script>
	<script src="{{asset('maxim/js/animate.js')}}"></script>
	<script src="{{asset('maxim/js/custom.js')}}"></script>
	<script src="{{asset('maxim/contactform/contactform.js')}}"></script>

</body>

</html>
