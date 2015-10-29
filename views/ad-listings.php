<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<title>Ad Listing | OLX.ph</title>
		<link rel="stylesheet" href="../web/css/app.css" />
		<script src="../web/js/modernizr.js"></script>
	</head>
	<body>
<?php include('topbar.php'); ?>
<div class="off-canvas-wrap" data-offcanvas>
	
	<div class="inner-wrap">
		<div class="inner-inner-wrap">
		<aside class="left-off-canvas-menu">
        <!-- whatever you want goes here -->
		<ul class="off-canvas-list">
			<li><label>Filters</label></li>
			<li><a href="#" data-reveal-id="filterModal-sort">Sort by: Cheapest First</a></li>
			<li><a href="#" data-reveal-id="filterModal-category">Change Category</a></li>
			<li><a href="#" data-reveal-id="filterModal-location">Change Location</a></li>
			<li><a href="#" data-reveal-id="filterModal-appPush">Advanced Filter</a></li>
		</ul>
    </aside>
		
<!-- Ad Content -->

		<div class="adListings">
		<div class="adListing-item sponsored">
			<div class="card">
				<div class="adThumbnail" style="">
				</div>
				<div class="adMeta">
					<h3><small>Hello</small></h3>
					<strong class="price">P1200</strong>
				</div>
			</div>
		</div>
		<?php 
		for ($i = 0; $i < 7; $i++) {	
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
		<div class="small-12 column">
			<div class="adbox display-block text-center">
				Ad Box
			</div>
		</div>
		<?php 
		for ($i = 0; $i < 7; $i++) {	
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
		<div class="adListing-item sponsored">
			<div class="card">
				<div class="adThumbnail" style="">
				</div>
				<div class="adMeta">
					<h3><small>Hello</small></h3>
					<strong class="price">P1200</strong>
				</div>
			</div>
		</div>
		
	</div>
		<nav class="row">
		<div class="small-6 column text-center">
			<a href="#" class="button display-block">Previous</a>
		</div>
		<div class="small-6 column text-center">
			<a href="#" class="button display-block">Next</a>
		</div>
	</nav>
		<div class="row margin-top-medium">
		<div class="small-12 column">
			<a href="#" class="left-off-canvas-toggle filter-button button display-block text-center">Filter</a>
		</div>
	</div>
		
		<!-- Reveal Modals begin -->
		<!-- this show the primary categories -->
		<div id="filterModal-category" class="reveal-modal" data-reveal aria-labelledby="filterCategories" aria-hidden="true" role="dialog">
		<h2 id="filterCategories">Select Category</h2>
		<div class="list-category">
			
			<div class="card-category">
				<a href="#" data-reveal-id="filterModal-category-second">Category A</a>
			</div>
			<div class="card-category">
				<a href="#">Category B</a>
			</div>
			<div class="card-category">
				<a href="#">Category C</a>
			</div>
		</div>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
		<!-- end of primary categories -->
	
		<!-- this shows secondary categories -->
		<div id="filterModal-category-second" class="reveal-modal" data-reveal aria-labelledby="filterSubcategories" aria-hidden="true" role="dialog">
		<h2 id="filterSubcategories">Select Category</h2>
		<div class="card-category">
			<a href="#" data-reveal-id="filterModal-category-second">Select all in Category A</a>
		</div>
		<div class="card-category">
			<a href="#" data-reveal-id="filterModal-category-second">Subcategory A</a>
		</div>
		<div class="card-category">
			<a href="#">Subcategory B</a>
		</div>
		<div class="card-category">
			<a href="#">Subcategory C</a>
		</div>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
		<!-- this ends secondary categories-->
		<!-- Sort by Modal -->
		<div id="filterModal-sort" class="reveal-modal tiny" data-reveal aria-labelledby="filterModal-sortBy" aria-hidden="true" role="dialog">
		<h2 id="filterModal-sortBy">Sort By</h2>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		<div class="row margin-top-medium">
			<div class="small-12 column">
				<a href="" class="button display-block text-center hollow margin-bottom-base">Cheapest First</a>
				<a href="" class="button display-block text-center hollow">Date Posted</a>
			</div>
		</div>
	</div>
		<!-- End sort by Modal -->
		<!-- this the app push -->
		<div id="filterModal-appPush" class="reveal-modal" data-reveal aria-labelledby="filterAppPush" aria-hidden="true" role="dialog">
		<h2 id="filterappPush">App push</h2>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
		<!-- end of app push -->
		<a class="exit-off-canvas"></a>
		<!-- end of ad content -->

		<?php include('footer.php'); ?>
		</div>
	</div>
</div>
<?php include('scripts.php'); ?>
  </body>
</html>
