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
			<aside class="bottom-off-canvas-menu">
	        <!-- whatever you want goes here -->
				<ul class="off-canvas-list">
					<li><label>Filters</label></li>
					<li><a href="#" data-reveal-id="filterModal-sort">Sort by: Cheapest First</a></li>
					<li><a href="#" data-reveal-id="filterModal-category">Change Category</a></li>
					<li><a href="#" data-reveal-id="filterModal-location">Change Location</a></li>
					<li><a href="#" data-reveal-id="filterModal-appPush">Advanced Filter</a></li>
				</ul>
			</aside>


			<?php
				$page = $_GET['page'];	/* gets the variable $page */
				if ($page == "no-results"){
			?>
			<div class="search-meta row">
				<div class="small-12 columns">
					<h2><small>No results for &ldquo;Phones&rdquo;</small></h2>
					<small>Do you mean: &quot;<a href="">Hondo</a>&quot;&#63;</small>
				</div>
			</div>
			<div class="adListings">
				<div class="small-12 column padding-top-half">
					<small>Sponsored link related to: <strong>condo</strong></small>
				</div>
				<div class="adSense-item">
					<a href="#">
					<div class="card">
						<div class="adMeta">
							<h3><small>Adsense Ad Title</small></h3>
							<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </small>
						</div>
					</div>
					</a>
				</div>
			</div>
			<?php
				} 	/* if $page has a value, include it */
				else if ($page == "foreign"){
			?>
			<div class="search-meta row">
				<div class="small-12 columns">
				<h2><small>18 results for &ldquo;Phones&rdquo;</small></h2>
				</div>
			</div>
			<div class="adListings">
				<div class="adSense-item">
					<a href="#">
					<div class="card">
						<div class="adMeta">
							<h3><small>Adsense Ad Title</small></h3>
							<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </small>
						</div>
					</div>
					</a>
				</div>
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
				for ($i = 0; $i < 6; $i++) {	
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
				for ($i = 0; $i < 6; $i++) {	
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
				<div class="small-12 column">
					<div class="adbox display-block text-center">
						Ad Box
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
			
			<div class="adSense-item">
					<a href="#">
					<div class="card">
						<div class="adMeta">
							<h3><small>Adsense Ad Title</small></h3>
							<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </small>
						</div>
					</div>
					</a>
				</div>
			<?php
				}
				else {
			?>
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
				for ($i = 0; $i < 6; $i++) {	
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
				for ($i = 0; $i < 6; $i++) {	
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
			<div class="row">
				<div class="small-12 large-12 end column">
					<a href="#" class="hide-for-large-up left-off-canvas-toggle filter-button button display-block text-center">Filter</a>
					<div class="button-group">
						<a href="" class="button neutral text-center"><small>Sort: By Price</small></a><a href="" class="button neutral text-center"><small>Change Category</small></a><a href="" data-reveal-id="sendPM" class="button neutral text-center"><small>Change Location</small></a><a href="" data-reveal-id="sendPM" class="button neutral text-center"><small>Advanced Filters</small></a>
					</div>
				</div>
			</div>
			<nav class="row margin-top-medium">
				<div class="small-6 medium-4 large-3 column text-center">
					<a href="#" class="button display-block hollow">Previous</a>
				</div>
				<div class="small-6 medium-4 large-offset-6 large-3 column text-center">
					<a href="#" class="button display-block hollow">Next</a>
				</div>
				<div class="small-12 column">
					<div class="adbox display-block text-center">
						Ad Box
					</div>
				</div>
			</nav>
			
			<?php
				} 	/* otherwise, include the default page */
				
			?>
			<!-- Ad Content -->
			
			
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
