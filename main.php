<?php 
require_once('includes/header.php');
require_once('includes/categories.php');
require_once('includes/listings.php');
require_once('includes/view.php');

//get catid and status
// $iCategoryId = $_GET['categoryid'];
// $sStatus = $_GET['status'];

//load category

// $oCatagory = new category();
// $oCatagory->load($iCategoryId);


// echo View::renderCategory($oCatagory,$sStatus);
?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pet Finder</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<div class = "header">
	<div class= "logo">	
		<img src="assets/images/logo2.png" alt="">
	</div>

	<ul class = "leftNav">
		
		<li><a href="homepage.php">Home</a></li>
		
		<li class="dropdown">
			<a href="#" class="dropbtn">Lost</a>
			 <div class="dropdown-content">
    			<a href="main.php">Dog</a>
    			<a href="main.php">Cat</a>
    			<a href="main.php">Bird</a>
  			</div>
  		</li>
		
		<li class="dropdown">
			<a href="#" class="dropbtn">Found</a>
			<div class = "dropdown-content">
				<a href="main.php">Dog</a>
				<a href="main.php">Cat</a>
				<a href="main.php">Bird</a>
			</div>
		</li>

		<li><a href="success_stories.php">Success Stories</a></li>
	</ul>

	<ul class="rightNav">
		<li><a href="registration.php">Sign Up</a></li>
		<li><a href="login.php">Log In</a></li>	
	</ul>
</div> -->

<!-- <div class="banner">	
	<h1>Browse Listings</h1>
	<a class="login" href="login.php">Log In</a> or <a class="signup" href="registration.php">Sign Up</a> to create a listing
</div>

<div class="container"> -->

<?php  

// $iCategoryId = 1;
// $sStatus = 'found';

//get catid and status
$iCategoryId = $_GET['categoryid'];
$sStatus = $_GET['status'];

//load category

$oCategory = new Category();
$oCategory->load($iCategoryId);


echo View::renderListings($oCategory,$sStatus);

?>
	<!-- <div class="listing">	
		<img src="assets/images/teddy.jpg" alt="">
		<div class="listing-info">
			<h3>Teddy - Missing</h3>
			<p><span>Region:</span>Auckland</p>
			<p><span>Date:</span> 2/6/16</p>
		</div>
		<a class="view-listing-button" href="full_listing.php">View Listing</a>
		
	</div>

	<div class="listing">	
		<img src="assets/images/redkitty.jpg" alt="">
		<div class="listing-info">
			<h3>Portia - help us find her!	</h3>
				<p><span>Region:</span>Auckland</p>
				<p><span>Date:</span> 10/6/16</p>
		</div>
		<a class="view-listing-button" href="full_listing.php">View Listing</a>
	</div>

	<div class="listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Region:</span>Northland</p>
			<p><span>Date:</span> 20/6/16</p>
		<a class="view-listing-button" href="full_listing.php">View Listing</a>
	</div>
	

	<div class="listing">	
		<img src="assets/images/teddy.jpg" alt="">
		<div class="listing-info">
			<h3>Teddy - Missing</h3>
			<p><span>Region:</span>Auckland</p>
			<p><span>Date:</span> 2/6/16</p>
		</div>
		<a class="view-listing-button" href="full_listing.php">View Listing</a>	
	</div>

	<div class="listing">	
		<img src="assets/images/redkitty.jpg" alt="">
		<div class="listing-info">
			<h3>Portia - help us find her!	</h3>
			<p><span>Region:</span>Auckland</p>
			<p><span>Date:</span> 2/6/16</p>
		</div>
		<a class="view-listing-button" href="full_listing.php">View Listing</a>
	</div>

	<div class="listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Region:</span>Northland</p>
			<p><span>Date:</span> 2/6/16</p>
		</div>
		<a href="full_listing.php">View Listing</a>
	</div>
	 -->
</div>


<?php  

require_once('includes/footer.php');

?>