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
<!-- Ad Content -->
	<div class="row small-collapse">
		<div class="small-12 columns">
			<ul class="breadcrumbs" style="margin-bottom: 0px;">
			<li><a href="#">Home</a></li>
			<li class="current"><a href="#">Searching for Gundam</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
<?php
for ($i = 0; $i < 10; $i++) {
?>
			<div class="row adListing">
				<div class="small-4 columns ad-thumbnail">
					
				</div>
				<div class="small-8 columns">
					<div class="adTitle">Wow such ad title much sell very yaman</div>
					<div class="adPrice">P9,990</div>
					<div class="adMeta">
						<small>Manila</small><br />
						<small>Today 08:10</small>
					</div>
				</div>
			</div>
<?php
}
?>
			
		</div>
	</div>
<!-- end of ad content -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
