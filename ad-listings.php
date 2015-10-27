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
			<li><a href="#" data-reveal-id="filterModal-sort">Sort by: Cheapest First</a></li>
			<li><a href="#" data-reveal-id="filterModal-category">Change Category</a></li>
			<li><a href="#" data-reveal-id="filterModal-location">Change Location</a></li>
			<li><a href="#" data-reveal-id="filterModal-appPush">Advanced Filter</a></li>
		</ul>
    </aside>
		<div class="filter-fixed-bar hide-for-large-up">
			<div class="small-12 column">
				<a href="#" class="left-off-canvas-toggle filter-button button display-block text-center">Filter</a>
			</div>
		</div>
		<!-- start of category modals -->
		<!-- this shows the first level categories -->
		<div id="filterModal-category" class="reveal-modal" data-reveal aria-labelledby="filterCategories" aria-hidden="true" role="dialog">
			<h2 id="filterCategories">Categories</h2>
			<div class="list-category">
				<div class="card-category">
					<a href="#">Category A</a>
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
		
		
		<!-- Sort by Modal -->
		<div id="filterModal-sort" class="reveal-modal tiny" data-reveal aria-labelledby="filterModal-sortBy" aria-hidden="true" role="dialog">
			<h2 id="filterModal-sortBy">Sort By</h2>
			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
			<a href="" class="button display-block text-center hollow">Cheapest First</a>
			<a href="" class="button display-block text-center hollow">Date Posted</a>
		</div>
		<!-- End sort by Modal -->
		
		<!-- Sort by Location -->
		
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
		<a href="#" data-reveal-id="firstModal" class="radius button">Modal in a modal&hellip;</a>
<a href="#" data-reveal-id="videoModal" class="radius button">Example Modal with Video&hellip;</a>

<!-- Reveal Modals begin -->
<div id="firstModal" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
  <h2 id="firstModalTitle">This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<div id="secondModal" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
  <h2 id="secondModalTitle">This is a second modal.</h2>
  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<div id="videoModal" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
  <h2 id="videoModalTitle">This modal has video</h2>
  <div class="flex-video widescreen vimeo">
    <iframe width="1280" height="720" src="//www.youtube-nocookie.com/embed/wnXCopXXblE?rel=0" frameborder="0" allowfullscreen></iframe>
  </div>

  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
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
