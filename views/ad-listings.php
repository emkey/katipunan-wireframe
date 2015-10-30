<!doctype html>
<html class="no-js" lang="en">
<?php include_once('global-header.php'); ?>
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
			<div class="search-meta row">
				<div class="small-12 columns">
				<h2><small>18 results for &ldquo;Phones&rdquo;</small></h2>
				</div>
			</div>
			<div class="adListings">
				<div class="adListing-item sponsored">
					<a href="#">
					<div class="card">
						<div class="adThumbnail" style="background-image: url('http://placehold.it/640x360')">
						</div>
						<div class="adMeta">
							<h3><small>Hello</small></h3>
							<strong class="price">P1200</strong>
							
						</div>
					</div>
					</a>
				</div>
				<?php 
				for ($i = 0; $i < 7; $i++) {	
				?>
				<div class="adListing-item">
					<a href="#">
					<div class="card">
						<div class="adThumbnail" style="background-image: url('http://placehold.it/640x360')">
						</div>
						<div class="adMeta">
							<h3><small>Hello</small></h3>
							<strong class="price">P1200</strong>
						</div>
					</div>
					</a>
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
						<div class="adThumbnail" style="background-image: url('http://placehold.it/640x360')">
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
						<div class="adThumbnail" style="background-image: url('http://placehold.it/640x360')">
						</div>
						<div class="adMeta">
							<h3><small>Hello</small></h3>
							<strong class="price">P1200</strong>
						</div>
					</div>
				</div>
				
			</div>
			<nav class="row">
				<div class="small-6 medium-4 large-3 column text-center">
					<a href="#" class="button display-block hollow">Previous</a>
				</div>
				<div class="small-6 medium-4 large-3 column text-center">
					<a href="#" class="button display-block hollow">Next</a>
				</div>
			</nav>
			<div class="row margin-top-medium">
				<div class="small-12 column">
					<a href="#" class="left-off-canvas-toggle filter-button button display-block text-center">Filter</a>
				</div>
			</div>

			<a class="exit-off-canvas"></a>
			<!-- end of ad content -->
			<?php include_once ('modals.php');?>
			<?php include('footer.php'); ?>
		</div>
	</div>
</div>
<?php include('scripts.php'); ?>
  </body>
</html>
