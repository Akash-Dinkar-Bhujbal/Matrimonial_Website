<?php include_once("includes/basic_includes.php"); ?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Find Your Perfect Partner - Matrimony | Home ::
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<!--font-Awesome-->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--font-Awesome-->
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
</head>

<body>
	<!-- ============================  Navigation Start =========================== -->
	<?php include_once("includes/navigation.php"); ?>
	<!-- ============================  Navigation End ============================ -->
	<div class="banner">
		<div class="container">
			<div class="banner_info">
				<h3>Millions of verified Members</h3>

				<?php
				if (!isset($_SESSION['username'])) {
					echo "<a href='register.php' class='hvr-shutter-out-horizontal'>Create your Profile</a>";
				} else {
					echo "";
				}

				?>

				<!--      <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>-->


			</div>
		</div>

	</div>
	<div class="grid_1">
		<div class="container">
			<h1>Featured Profiles</h1>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
			</div>
			<ul id="flexiselDemo3">
				<?php
				$sql = "SELECT * FROM customer";
				$result = mysqlexec($sql);
				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$name = $row['firstname'] . " " . $row['lastname'];
						$profileid = $row['cust_id'];
						$age = $row['age'];
						$place = $row['state'] . "," . $row['district'];
						$job = $row['occupation'];

						//getting profilepic
						$pic1 = '';
						$sql2 = "SELECT * FROM photos WHERE cust_id = $profileid";
						$result2 = mysqlexec($sql2);
						if ($result2) {
							$row2 = mysqli_fetch_array($result2);
							$pic1 = $row2['pic1'];
						}
						//got profilepic
						//
						//Printing the html
						echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";
						echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
						echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
						echo "<div class=\"center-middle\">About {$name}</div>";
						echo "</div>";
						echo "<h3><span class=\"m_3\">Profile ID : {$profileid}</span><br>{$age}, {$place}<br>{$job}</h3></a></div>";
						echo "</li>";
					}
				}

				?>
			</ul>
			<script type="text/javascript">
				$(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 6,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
							portrait: {
								changePoint: 480,
								visibleItems: 1
							},
							landscape: {
								changePoint: 640,
								visibleItems: 2
							},
							tablet: {
								changePoint: 768,
								visibleItems: 3
							}
						}
					});

				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="grid_2">
		<div class="container">
			<h2>Success Stories</h2>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
			</div>
			<div class="row_1">
				<div class="col-md-8 suceess_story">
					<ul>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Oct 16, 2012</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/saif-karina.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Saif & Kareena </a></h4>
									<p>On 16 October 2012, Khan married actress Kareena Kapoor (after a five-year courtship) in a private ceremony in Bandra, Mumbai, and a reception was later held at The Taj Mahal Palace Hotel and the Lutyens Bungalow Zone in Mumbai and Delhi respectively.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Nov 14, 2018</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/ranveer-deepika.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Ranveer & Deepika </a></h4>
									<p>Ranveer Singh tied the knot with Deepika Padukone in November 2018 after dating for six years. The 33-year-old revealed that life has changed for him post marriage. ... It's been almost four months since Ranveer Singh and Deepika Padukone tied the knot in an intimate ceremony at Lake Como in Italy.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Dec 11, 2017</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/veerat-anushka.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Virat & Anushka </a></h4>
									<p>The star pair had got married on December 11, 2017. They, however, will not be together today, with Virat Kohli on tour of Australia with the Indian team. ... In August this year, Kohli and Anushka had announced that they are expecting their first child.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Apr 20, 2007</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/abhishek-ayshwarya.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Abhishek & Aishwarya </a></h4>
									<p>Aishwarya Rai Bachchan and Abhishek Bachchan are celebrating their wedding anniversary today and completed 13 years of togetherness. They tied the knot in a traditional ceremony on April 20, 2007, at Amitabh Bachchan's residence in Mumbai.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Dec 28, 2005</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/amir-kiran.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Aamir & Kiran </a></h4>
									<p>Khan was married to his first wife, Reena Dutta, for fifteen years, after which he married the film director Kiran Rao. He has three children—two with Dutta, and one with Rao through surrogacy.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Feb 14, 1999</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/ajay-kajol.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Kajol and Ajay </a></h4>
									<p>Kajol has been married to actor Ajay Devgn, with whom she has two children, since 1999.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="suceess_story-date">
								<span class="entry-1">Feb 03, 2012</span>
							</div>
							<div class="suceess_story-content-container">
								<figure class="suceess_story-content-featured-image">
									<img width="75" height="75" src="stories/Ritesh-Jeneliya.jpg" class="img-responsive" alt="" />
								</figure>
								<div class="suceess_story-content-info">
									<h4><a href="#">Riteish & Genelia </a></h4>
									<p>Bollywood's most beautiful and cutest looking couple, Riteish and Genelia, tied the knot on February 3, 2012. They made their debut together in 2003, in Tujhe Meri Kasam and soon fell in love. ... Riteish Deshmukh is a Maharashtrian Hindu, while Genelia D'souza is a Mangalorean Catholic.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-4 row_1-right">
					<h3>News & Events</h3>

					<div class="box_1">
						<figure class="thumbnail1"><img width="170" height="155" src="photos/1.jpeg" class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">24</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">March</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Vadhu Var Melawa 4pm to 7pm</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">Vadhu Var Melawa for All caste Unmarried/ Divorcee/ All Age Group people at Chabildas School, Dadar West.</div>

						</div>
					</div>
					<div class="box_1">
						<figure class="thumbnail1"><img width="170" height="155" src="photos/2.jpg" class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">24</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">February</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Vadhu Var Melawa 4pm to 7pm</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">Vadhu Var Melawa for All caste Unmarried/ Divorcee/ All Age Group people at Chabildas School, Dadar West.</div>

						</div>
					</div>
					<div class="box_1">
						<figure class="thumbnail1"><img width="170" height="155" src="photos/3.jpg" class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">20</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">January</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Vadhu Var Melawa 11am to 2pm</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">Vadhu Var Melawa for All caste Unmarried/ Divorcee/ All Age Group people at Chabildas School, Dadar West.</div>

						</div>
					</div>
					<div class="box_1">
						<figure class="thumbnail1"><img width="170" height="155" src="photos/4.jpg" class="img-responsive" alt="" /></figure>
						<div class="extra-wrap">
							<div class="post-meta">
								<span class="day">
									<time datetime="2014-05-25T10:15:43+00:00">09</time>
								</span>
								<span class="month">
									<time datetime="2014-05-25T10:11:51+00:00">December</time>
								</span>
							</div>
							<h4 class="post-title"><a href="#">Vadhu Var Melawa 4pm to 7pm</a></h4>
							<div class="clearfix"> </div>
							<div class="post-content">Vadhu Var Melawa for All caste Unmarried/ Divorcee/ All Age Group people at Chabildas School, Dadar West.</div>
						</div>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="bg">
		<div class="container">
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
			</div>
			<div class="col-sm-6">
				<div class="bg_left">
					<h4>Amazing quality and very professional!</h4>
					<h5>Friend of Bride</h5>
					<p>"My Indian wedding invitations are beautiful & great quality! Came quickly. Beyond excited to send out to our guests. Very nice material used to make these invitations. 10/10 would recommend."</p>
					<ul class="team-socials">
						<li><a href="https://www.facebook.com/utssahofficial"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
						<li><a href="https://twitter.com/utssahofficial"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
						<li><a href="https://www.instagram.com/utssahofficial/"><span class="icon-social"><i class="fa fa-instagram"></i></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="bg_left">
					<h4>It is good</h4>
					<h5>Friend of Groom</h5>
					<p>"This is very nice to do marriages and also this app is vary secure without verifying couldn't upload any information and pics"</p>
					<ul class="team-socials">
						<li><a href="https://www.facebook.com/utssahofficial"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
						<li><a href="https://twitter.com/utssahofficial"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
						<li><a href="https://www.instagram.com/utssahofficial/"><span class="icon-social"><i class="fa fa-instagram"></i></span></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<?php include_once 'footer.php'; ?>