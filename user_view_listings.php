<?php 
require_once('includes/header.php');
?>

<div class="banner">	
	<h1>Your Current Listings</h1>
	<a class="listing-button" href="user_create_listing.php">Create Listing</a>
</div>

<?php  

//what goes here - how to combine load by userid and view.
echo View::renderUserListings($aUserListings);

?>
<!-- <div class="container">
	<div class="user-listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Suburb:</span> Kaitaia</p>
			<p><span>Region:</span>Northland</p>
			<p><span>Date L/F:</span> 20/6/16</p>
			<p><span>Sex:</span> Male, not neutered<p>
			<p><span>Breed:</span>Labrador</p><br>
			<p><span>Contact:</span>Andrew</p>
			<p><span>Contact ph:</span>(027) 876 4567</p><br>
			<p>Blackie is very friendly and was wearing a blue collar with a silver tag collar with his name on it.</p>	
		</div>
		<a class="edit" href="user_edit_listing.php">Edit</a>
		<a class="delete" href="user_edit_listing.php">Delete</a>
	</div>

	<div class="user-listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Suburb:</span> Kaitaia</p>
			<p><span>Region:</span>Northland</p>
			<p><span>Date L/F:</span> 20/6/16</p>
			<p><span>Sex:</span> Male, not neutered<p>
			<p><span>Breed:</span>Labrador</p><br>
			<p><span>Contact:</span>Andrew</p>
			<p><span>Contact ph:</span>(027) 876 4567</p><br>
			<p>Blackie is 4 months old and is very friendly. Was wearing a blue collar with a silver tag collar with his name on it.</p>	
		</div>
		<a class="edit" href="user_edit_listing.php">Edit</a>
		<a class="delete" href="user_edit_listing.php">Delete</a>
	</div>

	<div class="user-listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Suburb:</span> Kaitaia</p>
			<p><span>Region:</span>Northland</p>
			<p><span>Date L/F:</span> 20/6/16</p>
			<p><span>Sex:</span> Male, not neutered<p>
			<p><span>Breed:</span>Labrador</p><br>
			<p><span>Contact:</span>Andrew</p>
			<p><span>Contact ph:</span>(027) 876 4567</p><br>
			<p>Blackie is very friendly and was wearing a blue collar with a silver tag collar with his name on it.</p>	
		</div>
		<a class="edit" href="user_edit_listing.php">Edit</a>
		<a class="delete" href="user_edit_listing.php">Delete</a>
	</div>

	<div class="user-listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Suburb:</span> Kaitaia</p>
			<p><span>Region:</span>Northland</p>
			<p><span>Date L/F:</span> 20/6/16</p>
			<p><span>Sex:</span> Male, not neutered<p>
			<p><span>Breed:</span>Labrador</p><br>
			<p><span>Contact:</span>Andrew</p>
			<p><span>Contact ph:</span>(027) 876 4567</p><br>
			<p>Blackie is very friendly and was wearing a blue collar with a silver tag collar with his name on it.</p>	
		</div>
		<a class="edit" href="user_edit_listing.php">Edit</a>
		<a class="delete" href="user_edit_listing.php">Delete</a>
	</div>

	<div class="user-listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Suburb:</span> Kaitaia</p>
			<p><span>Region:</span>Northland</p>
			<p><span>Date L/F:</span> 20/6/16</p>
			<p><span>Sex:</span> Male, not neutered<p>
			<p><span>Breed:</span>Labrador</p><br>
			<p><span>Contact:</span>Andrew</p>
			<p><span>Contact ph:</span>(027) 876 4567</p><br>
			<p>Blackie is very friendly and was wearing a blue collar with a silver tag collar with his name on it.</p>	
		</div>
		<a class="edit" href="user_edit_listing.php">Edit</a>
		<a class="delete" href="user_edit_listing.php">Delete</a>
	</div>

	<div class="user-listing">	
		<img src="assets/images/blackie.jpg" alt="">
		<div class="listing-info">
			<h3>Bring Blackie Home!	</h3>
			<p><span>Suburb:</span> Kaitaia</p>
			<p><span>Region:</span>Northland</p>
			<p><span>Date L/F:</span> 20/6/16</p>
			<p><span>Sex:</span> Male, not neutered<p>
			<p><span>Breed:</span>Labrador</p><br>
			<p><span>Contact:</span>Andrew</p>
			<p><span>Contact ph:</span>(027) 876 4567</p><br>
			<p>Blackie is very friendly and was wearing a blue collar with a silver tag collar with his name on it.</p>	
		</div>
		<a class="edit" href="user_edit_listing.php">Edit</a>
		<a class="delete" href="user_edit_listing.php">Delete</a>
	</div> -->

<!-- </div> -->

<?php 
require_once('includes/footer.php'); 
?>
