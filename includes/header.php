<?php 

session_start();
require_once('categorymanager.php');
require_once('view.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pet Finder</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<div class = "header">
	<div class= "logo">	
		<img src="assets/images/logo2.png" alt="">	
	</div>

<?php 

$aCategories = CategoryManager::getCategories();
echo View::renderNav($aCategories);

if(isset($_SESSION['userid']) == true){ //if a session is underway ie. user is logged in show this rhs nav
	
	$sHTML = '<ul class="rightNav">
				<li><a href="user_create_listing.php">Create a Listing</a></li>
				<li><a href="user_view_listings.php">My Listings</a></li>
				<li><a href="userdetails.php">My Details</a></li>
				<li><a href="logout.php">Log Out</a></li>	
			</ul>';

}else{ //if a session is not underway show this rhs nav

	$sHTML = '	<ul class="rightNav">
					<li><a href="registration.php">Sign Up</a></li>
					<li><a href="login.php">Log In</a></li>	
				</ul>';
}

echo $sHTML;

?>


<!-- if statement to get correct nav on RHS -->
	<!-- <ul class="rightNav">
		<li><a href="registration.php">Sign Up</a></li>
		<li><a href="login.php">Log In</a></li>	
	</ul>
 -->
 </div>