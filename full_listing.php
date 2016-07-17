<?php 

require_once('includes/header.php');
require_once('includes/view.php');
require_once('includes/listings.php');
require_once('includes/categories.php');



?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pet Finder</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

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

<!-- <div class="container">
	<div class="big-image">
		<img src="assets/images/teddy.jpg" alt="">
	</div>
	<div class="full-listing">
		<h3>Teddy - Missing</h3>
		<p><span>Listing ID: </span>1</p>
		<p><span>Suburb: </span>Warkworth</p>
		<p><span>Region: </span>Auckland</p>
		<p><span>Date: </span>2/6/16</p>
		<p><span>Sex: </span>Male, Neutered<p>
		<p><span>Breed: </span>Domestic Longhair</p>
		<hr>
		<p>Teddy is much loved.  He can be shy around strangers but knows his name if you call him. He is gray with a white stripe down 
			his nose to his chest.</p>
		<hr>
		<p><span>Contact: </span>Bob</p>
		<p><span>Contact Ph:</span> (09) 436 9857</p>
		
	</div>

</div> -->

<?php

$iListingId = 2;

$iListingId = $_GET['listingid'];

// $oCategory = new Category;
// $oCategory->load($iCategoryId)

$oListing = new Listing();
$oListing->load($iListingId); 

echo View::renderFullListing($oListing);

require_once('includes/footer.php');

?>
