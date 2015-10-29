<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<title>Ad Title | OLX.ph</title>
		<link rel="stylesheet" href="../css/app.css" />
		<script src="bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>
<?php include('topbar.php'); ?>
<!-- Floating Contact Bar -->

<!-- end Floating Contact Bar -->
<!-- Ad Content -->
<div class="row collapse large-uncollapse homescreenBody">
	<div class="small-12 large-5 columns sellSection">
		<a href="#" class="button large sellButton">Sell an Item</a>
	</div>
	<div class="small-12 large-7 columns">
		<div class="row categoryList collapse large-collapse">
			<?php
			for ($i = 0; $i < 12; $i++) {
			?>	
			<div class="small-12 medium-4 large-3 columns categoryList-item">
				<a href="" class="categoryLink"><span class="categoryIcons"></span><span class="categoryTitle">Category Title</span></a>
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
