<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma|Lato:100,300,400,700,900|Play:400,700|Playfair+Display:400,700,900|Poppins:300,400,500,600,700|Quicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>


<!-- END DOCTYPE AND HEAD TAGS   -->


<body>

	<div id="lightbox">
		<!-- The overlay -->
		<div id="myNav" class="overlay">
			<!-- Button to close the overlay navigation -->
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div id="myNav_content">
					<!-- Overlay content -->
				<!-- <div id="nav_links_left">
					<a href="#">brand \ identity</a>
					<a href="#">graphic design</a>
					<a href="#">web \ apps \ user x</a>
					<a href="#">print</a>
					<a href="#">interiors</a>
				</div>
				<div id="nav_links_right">
					<div id="nav_extra_links">
						<div id="nav_extra_links_column_1">
							<ul>
								<li id="shop-link"><a href="#">Shop</a></li>
								<li><a href="#"></a></li>
								<li><a href="#">about</a></li>
								<li><a href="#">contact</a></li>
								<li><a href="http://dmadsdesign-dev.com/dmadsdesign/the-design-trust">check out the blog</a></li>
								
							</ul>
						</div>
						<div id="nav_extra_links_column_2">
							<ul>
								<li id="lightbox_search" onclick="SearchIn('mySearch','0')">search</li>
								<li><a href="#">agbo + co</a></li>
								<li><a href="#">delinquent inc.</a></li>
								<li><a href="#">nexxt ventures</a></li>
							</ul>
						</div>
					</div> end nav extra links
				</div> <!- end nav links right -->
				<!-- <div id="social-nav-icons">
					<div id="social-icons">
						<div id="social-icons-container">
							<a href="#"><div class="facebook social-links"></div></a>
							<a href="#"><div class="twitter social-links"></div></a>
							<a href="#"><div class="linkedin social-links"></div></a>
							<a href="#"><div class="codepen social-links"></div></a>
							<a href="#"><div class="github social-links"></div></a>
						</div>
					</div>
				</div> --><!-- end social icons / portfolio link -->
				<!--<div id="mobile_search_social_media">
					<ul>
						<li id="mobile_search" onclick="SearchIn('mySearch','0')"></li>
						<a href="http://facebook.com/agbo-digital" target="blank"><li id="mobile_facebook"></li></a>
						<a href="#" target="blank"><li id="mobile_twitter"></li></a>
						<a href="#" target="blank"><li id="mobile_linkedin"></li></a>
						<a href="#" target="blank"><li id="mobile_pinterest"></li></a>
					</ul>	
				</div>--> 


			




				<table id="myNav-table">
					<tr>
						<td id="consultancy">
							<a href="#"><h1>consultancy</h1>
							<h2>we consult brands</h2>
							<p>we consult companies and individuals on brand strategy, brand architecture, brand image, amongst other things...  learn more.</p></a>
						</td>
						<td id="work">
							<a href="#"><h1>work</h1>
							<h2>see case studies</h2>
							<p>our work is based on using the principles of design to push business forward.  see if you like.</p></a>
						</td>
						<td id="articles">
							<a href="#"><h1>articles</h1>
							<h2>here's some design thought</h2>
							<p>we like to think out loud, design thinking is a philosophy that changes organizations... share and spread the love.</p></a>
						</td>
					</tr>
					<tr>
						<td id="contact-us">
							<a href="#"><h1>contact us</h1>
							<h2>get in touch</h2>
							<p>wether you'd like to work with us, write about us, work for us, or just wanna say hi, feel free to reach out here.</p></a>
						</td>
						<td id="shop">
							<a href="#"><h1>shop</h1>
							<h2>shop the best in design</h2>
							<p>from design furniture and everyday products, to high tech gadgets and classic posters, and much more.</p></a>
						</td>
						<td id="connect">
							<h1>connect</h1>
							<h2>connect with us on social media</h2>
							<div id="social-icons-container">
								<a href="#"><div class="facebook social-links"></div></a>
								<a href="#"><div class="twitter social-links"></div></a>
								<a href="#"><div class="linkedin social-links"></div></a>
								<a href="#"><div class="codepen social-links"></div></a>
								<a href="#"><div class="github social-links"></div></a>
							</div>
						</td>
					</tr>
				</table>








				<table id="myNav-table-mobile">
					<tr>
						<td id="consultancy-mobile">
							<a href="#"><h1>consultancy</h1>
							<h2>we consult brands</h2>
							<p>we consult with companies and individuals from all industries...  learn more.</p></a>
						</td>
						<td id="work-mobile">
							<a href="#"><h1>work</h1>
							<h2>see case studies</h2>
							<p>we use design principles to push business forward.</p></a>
						</td>
					</tr>
					<tr>
						<td id="articles-mobile">
							<a href="#"><h1>articles</h1>
							<h2>here's some design thought</h2>
							<p>we like to think out loud... share and spread the love.</p></a>
						</td>
						<td id="contact-us-mobile">
							<a href="#"><h1>contact us</h1>
							<h2>get in touch</h2>
							<p>work with us, write about us, work for us, or just say hi.</p></a>
						</td>
					</tr>
					<tr>
						<td id="shop-mobile">
							<a href="#"><h1>shop</h1>
							<h2>shop the best in design</h2>
							<p>money well spent.</p></a>
						</td>
						<td id="connect-mobile">
							<h1>connect</h1>
							<h2>connect with us on social media</h2>
							<!-- <div id="social-icons-container">
								<a href="#"><div class="facebook social-links"></div></a>
								<a href="#"><div class="twitter social-links"></div></a>
								<a href="#"><div class="linkedin social-links"></div></a>
								<a href="#"><div class="codepen social-links"></div></a>
								<a href="#"><div class="github social-links"></div></a>
							</div> -->
						</td>
					</tr>
				</table>










			</div> <!-- end myNav content -->
		</div> <!-- end overlay -->
	</div> <!-- end lighbox -->



	<!-- BEGIN HEADER   -->

	<header>
		<!-- <div id="brandmark-logotype"></div> -->
		<div id="logotype"></div>
		<div id="brandmark"></div>
		<div id="menu-icon" onclick="NavIn('myNav','0')" ></div>
	</header>



	

	<!-- <div id="container">  begin main container -->






