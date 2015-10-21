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
<div class="off-canvas-wrap" data-offcanvas>
	
	<div class="inner-wrap">
	<aside class="left-off-canvas-menu">
        <!-- whatever you want goes here -->
		<ul class="off-canvas-list">
			<li><label>Filters</label></li>
			<li><a href="#" data-reveal-id="filterModal">Change Categories</a></li>
			<li><a href="#">Locations</a></li>
			<li><a href="#">Price Range</a></li>
			<li><a href="#">Date Posted</a></li>
		</ul>
    </aside>
		<div class="filter-fixed-bar hide-for-large-up">
			<div class="small-12 column">
				<a href="#" class="left-off-canvas-toggle filter-button button display-block text-center">Filter</a>
			</div>
		</div>
		<div id="filterModal" class="reveal-modal" data-reveal aria-labelledby="filterListings" aria-hidden="true" role="dialog">
			<h2 id="modalTitle">Filters</h2>
			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
			
		</div>
<!-- Ad Content -->

		<div class="adListings">
			
			<?php 
			for ($i = 0; $i < 12; $i++) {	
			?>
			<div class="adListing-item">
				<div class="card">
					<div class="adThumbnail" style="">
					</div>
					<div class="adMeta">
						<h3><small>Hello</small></h3>
						<strong class="price">P1200</strong>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
		<a class="exit-off-canvas"></a>
<!-- end of ad content -->

<?php include('footer.php'); ?>
	</div>
</div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
