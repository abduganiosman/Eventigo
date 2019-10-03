<!--

	WEBSITE NAME: Eventigo

	AUTHOR: Group 29

	DATE CREATED: 3rd March 2019

	WEBSITE DESCRIPTION: ...

	PAGE DESCRIPTION: ...

	CSS TEMPLATE:
	- Source: https://www.free-css.com/free-css-templates/page238/resume
	- Date accessed: 24th Feb '19

-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Eventigo</title>
		<link rel="icon" href="img/eventigo_icon.ico" type="image/x-icon">

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/aos.css" rel="stylesheet">
		<!-- main style -->
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<a name="topOfPage"></a>
		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
			</div>
		</div>
		<!-- ./Preloader -->

		<!-- header -->
		<header class="navbar-fixed-top">
			<a href="#topOfPage">
				<nav>
					<ul>
						<li><a href="#about">About</a></li>
						<li><a href="#events">Events</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="reg/login.html">Sign in</a></li>
						<li><a href="reg/signup.html">Sign up</a></li>
						<li>
						    <form action="search.php" method="post">
						      <input type="text" placeholder="Search.." name="search" class="form-input" id="search" required>
									<input type="submit" name="submit" id="submit" value="Search"/>

						    </form>
						</li>
					</ul>
				</nav>
			</a>
		</header>
		<!-- ./header -->

		<!-- home -->
		<div class="section" id="home" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="disply-table">
					<div class="table-cell" data-aos="fade-up" data-aos-delay="0">
						<h1>Eventigo</h1>
						<h4>Well that was eventful!</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- ./home -->

		<!-- about -->
		<div class="section" id="about">
			<div class="container">
				<div class="col-md-6" data-aos="fade-up">
					<h1 class="size-50">About Us</h1>
					<div class="h-50"></div>
					<p>To put it simply, if you would like to do any of the following:
						<ul>
							<li>Create events open to the public (or maybe only premimum users).</li>
							<li>Search for events by entering name, description, genre, location, etc.</li>
							<li>Purchase tickets for events in which you are interested in.</li>
							<li>Review hosts of events</li>
							<li>Receive feedback for your own events</li>
							<li>Receive recommendations based on booking history</li>
						</ul>

					Then <b><i>Eventigo</i></b> is the perfect app for you.</p>

					Whether you are an individual or a group, regardless of the scale, you can easily
					set up an event that can be booked by members of the public. For example, if you are
					simply a football hobbyist who wants to create an event where fellow hobbyists could play
				and exchange tips, then we have your back!</p>

				<p>All booking transactions take place within the app to avoid being redirected elsewhere.
				And did we mention that this can all be done via a simple browser?</p>

				<div class="h-50"></div>
			</div>
			<div class="col-md-6 about-img-div">
				<img src="img/about_events.jpg" width="400" class="img-responsive"
				align="right" data-aos="fade-right" data-aos-delay="0" />
				<!--
					Source: https://www.pexels.com/photo/architecture-auditorium-blue-bright-colours-382297/
					Date Accessed: 3rd March 2019
				-->
			</div>
		</div>
	</div>
	<!-- ./about -->

	<!-- events -->
	<div class="section" id="events">
		<div class="container">
			<div class="col-md-12">

				<h1 class="size-50">Events</h1>
			</div>
			<!-- main container -->
			<div class="main-container portfolio-inner clearfix">
				<!-- portfolio div -->
				<div class="portfolio-div">
					<div class="portfolio">
						<br /><br />


						<!-- portfolio_container -->
						<div class="no-padding portfolio_container clearfix" data-aos="fade-up">
							<!-- single work -->
							<div class="col-md-4 col-sm-6  fashion logo">
								<a id="demo01" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/01.jpg" alt="image" class="img-responsive" />
									<div class="portfolio_item_hover">
										<div class="portfolio-border clearfix">
											<div class="item_info"> <span>Mockups in seconds</span> <em>Fashion / Logo</em> </div>
										</div>
									</div>
								</a>
							</div>
							<!-- end single work -->

							<!-- single work -->
							<div class="col-md-4 col-sm-6 ads graphics">
								<a id="demo02" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/03.jpg" alt="image" class="img-responsive" />
									<div class="portfolio_item_hover">
										<div class="portfolio-border clearfix">
											<div class="item_info"> <span>Floating mockups</span> <em>Ads / Graphics</em> </div>
										</div>
									</div>
								</a>
							</div>
							<!-- end single work -->

							<!-- single work -->
							<div class="col-md-4 col-sm-6 photography">
								<a id="demo03" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/02.jpg" alt="image" class="img-responsive" />
									<div class="portfolio_item_hover">
										<div class="portfolio-border clearfix">
											<div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
										</div>
									</div>
								</a>
							</div>
							<!-- end single work -->

							<!-- single work -->
							<div class="col-md-4 col-sm-6 fashion ads">
								<a id="demo04" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/04.jpg" alt="image" class="img-responsive" />
									<div class="portfolio_item_hover">
										<div class="portfolio-border clearfix">
											<div class="item_info"> <span>Held by hands</span> <em>Fashion / Ads</em> </div>
										</div>
									</div>
								</a>
							</div>
							<!-- end single work -->

							<!-- single work -->
							<div class="col-md-4 col-sm-6 graphics ads">
								<a id="demo05" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/05.jpg" alt="image" class="img-responsive" />
									<div class="portfolio_item_hover">
										<div class="portfolio-border clearfix">
											<div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
										</div>
									</div>
								</a>
							</div>
							<!-- end single work -->

							<!-- single work -->
							<div class="col-md-4 col-sm-6 photography">
								<a id="demo06" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/010.jpg" alt="image" class="img-responsive" />
									<div class="portfolio_item_hover">
										<div class="portfolio-border clearfix">
											<div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
										</div>
									</div>
								</a>
							</div>
							<!-- end single work -->
						</div>
						<!-- end events_container -->
					</div>
					<!-- events -->
				</div>
				<!-- end events div -->

				<!--<form action="html/create_event_form.html">
					<input type="submit" value="Create Event" />
				</form>-->

				<?php include("html/create_event_form.html"); ?> <!--accessing event creation form from another file-->
			</div>
			<!-- end main container -->
		</div>
	</div>
	<!-- ./events -->

	<!-- reviews  -->
	<div class="section" id="reviews">
		<div class="container">
			<div class="col-md-12">
				<h1 class="size-50">Reviews</h1>
				<div class="h-50"></div>
			</div>
			<div class="col-md-12">
				<ul class="timeline">
					<?php include("scripts/store_reviews.html"); ?>
					<li class='timeline-event' data-aos='fade-up' data-aos-delay='.2'>
						<label class='timeline-event-icon'></label>
						<div class='timeline-event-copy'>
							<p class='timeline-event-thumbnail'>Posted: 2019-03-17 | 21:12:11</p>
							<h3>Kind of useful</h3>
							<h4>By John Smith</h4>
							Event name: Introduction to web development<p />
							Rating: 3/5<br />
							Comment: Not necessarily suited towards a complete beginner.<p />
						</div>
					</li>
				</ul>
			</div>

			<div class="col-md-8" data-aos="fade-up">
				<h2>Add a review</h2>
				<?php include("html/review_form.html"); ?>
			</div>
		</div>

	</div><br /><br />
	<!-- ./reviews -->

	<!--dummy popup for events - currently the same for all-->
	<div id="animatedModal" class="popup-modal">
		<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
		<div id="btn-close-modal" class="close-animatedModal close-popup-modal"> <i class="ion-close-round"></i> </div>
		<div class="clearfix"></div>
		<div class="modal-content">
			<div class="container">
				<div class="portfolio-padding">
					<div class="col-md-8 col-md-offset-2">
						<h2>Geschäfts Eines<br /> Web-Studios</h2>
						<div class="h-50"></div>
						<p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
						<p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
						<br />
						<br /> <img src="img/portfolio/02.jpg" alt="" class="img-responsive" />
						<br />
						<br />
						<p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
						<p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
						<br />
					<br /> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!--  plugins  -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>

	<!--main scripts-->
	<script src="js/custom.js"></script>
	<script src="js/rating_system.js"></script>
</body>

</html>
