<?php

require_once('includes/header.php'); 
require_once('includes/view.php'); 
require_once('includes/stories.php');
require_once('includes/story_manager.php');

?>
<!--  <div class="banner">	
	<h1>Success Stories</h1>
	<a class="login" href="login.php">Log In</a> or <a class="signup" href="registration.php">Sign Up</a> to create a listing
</div>

<div class="container"> -->	
<!-- 	<div class="success-story">
		<img src="assets/images/rusty.jpg" alt="">
		<div class="info">
		<h3>Rusty - reunited after 6 months lost</h3>
		<p><span>Age:</span> 7 years</p>
		<p><span>Sex:</span> Male, not neutered</p>
		<p><span>Breed:</span> Boxer</p>
		<p><span>Time Missing:</span> 6 months</p>
		<p>Rusty's story goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
		</div>
	</div>
	<hr> -->

<!-- 	<div class="success-story">
		<img src="assets/images/rusty.jpg" alt="">
		<div class="info">
		<h3>Rusty - reunited after 6 months lost</h3>
		<p><span>Age:</span> 7 years</p>
		<p><span>Sex:</span> Male, not neutered</p>
		<p><span>Breed:</span> Boxer</p>
		<p><span>Time Missing:</span> 6 months</p>
		<p>Rusty's story goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
		</div>
	</div>
	<hr> -->

<!-- </div> -->

<?php 

$aSuccessStories = StoryManager::getSuccessStories();

echo View::renderSuccessStories($aSuccessStories);

require_once('includes/footer.php'); 

?>
