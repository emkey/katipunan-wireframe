<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<title>Ad Listing | OLX.ph</title>
		<link rel="stylesheet" href="css/app.css" />
		<script src="bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>
<?php include('topbar.php'); ?>
	<div id="searchFilter" class="fixedButton hide-for-large-up">
		<a href="#" class="button expand">Filter</a>
	</div>
<!-- Ad Content -->
	<div class="row small-collapse  medium-uncollapse large-uncollapse">
		<div class="small-12 columns">
			<ul class="breadcrumbs" style="margin-bottom: 0px;">
			<li><a href="#">Home</a></li>
			<li class="current"><a href="#">Searching for Gundam</a></li>
			</ul>
		</div>
	</div>
	<div class="row adListings">
		<div class="large-3 show-for-large-up columns">
			<h2 class="subheader"><small>Location</small></h2>
			<ul>
				<li><a href="">Metro Manila</a></li>
				<li><a href="">Batangas</a></li>
				<li><a href="">Benguet</a></li>
				<li><a href="">Bulacan</a></li>
				<li><a href="">+ More Locations</a></li>
			</ul>
			<h2 class="subheader"><small>Categories</small></h2>
			<ul>
				<li><a href="">Books, Sports and Hobbies</a>
					<ul>
						<li><a href="">Collectibles</a></li>
						<li><a href="">Books and other Publications</a></li>
						<li><a href="">Souvenirs and Giveawats</a></li>
						<li><a href="">Arts and Crafts</a></li>
					</ul>
				</li>
				<li><a href="">Baby Stuff and Toys</a></li>
			</ul>
		</div>
		<div class="small-12 large-9 columns">
			<div class="row  small-collapse medium-uncollapse large-uncollapse">
<?php
for ($i = 0; $i < 12; $i++) {
?>			
			<div class="small-12 medium-6 large-4 columns">
				<div class="row adListing">
					<div class="small-4 large-12 columns ad-thumbnail">
						
					</div>
					<div class="small-8 large-12 columns">
						<div class="adTitle"><a href="">Wow such ad title much sell very yaman</a></div>
						<div class="adPrice">P9,990</div>
						<div class="adMeta">
							<small>Manila</small><br />
							<small>Today 08:10</small>
						</div>
					</div>
				</div>
			</div>
<?php
}
?>
			</div>
		</div>
	</div>
<!-- end of ad content -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>