<?php  

class View{

	static public function renderNav($aCategories){

		$sHTML = '	<ul class = "leftNav">
						<li><a href="homepage.php">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropbtn">Lost</a>
			 				<div class="dropdown-content">';

		for($i=0; $i<count($aCategories); $i++){

			$oCategory = $aCategories[$i];
	
			$sHTML .= '<a href="main.php?categoryid='.$oCategory->iId.'&status=lost">'.htmlentities($oCategory->sCategoryName).'</a>';
		}

  		$sHTML .= '</div>
  				</li>
		
				<li class="dropdown">
					<a href="#" class="dropbtn">Found</a>
					<div class = "dropdown-content">';
				
		for($i=0; $i<count($aCategories); $i++){

			$oCategory = $aCategories[$i];
	
			$sHTML .= '<a href="main.php?categoryid='.$oCategory->iId.'&status=found">'.htmlentities($oCategory->sCategoryName).'</a>';
		}
			
		$sHTML .= '</div>
				</li>

				<li><a href="success_stories.php">Success Stories</a></li>
			</ul>';
		
		return $sHTML;
	}

	static public function renderListings($oCategory,$sStatus){

		if($sStatus == 'lost'){

			$aListings = $oCategory->aLostListings;
		
		}else{

			$aListings = $oCategory->aFoundListings;

		}

		$sHTML = '<div class="banner">	
					<h1>Browse Listings</h1>
					<a class="login" href="login.php">Log In</a> or <a class="signup" href="registration.php">Sign Up</a> to create a listing
					</div>

				<div class="container">';

		for($i=0; $i<count($aListings); $i++){

			$oListing = $aListings[$i];

			$sHTML .= '<div class="listing">	
						<img src="assets/images/'.$oListing->sPhoto.'" alt="">
						<div class="listing-info">
							<h3>'.$oListing->sTitle.'</h3>
							<p><span>Region:</span>'.$oListing->sRegion.'</p>
							<p><span>Date:</span>'.$oListing->sDate.'</p>
						</div>
						<a class="view-listing-button" href="full_listing.php?listingid='.$oListing->iId.'">View Listing</a>
					</div>';

		}

		return $sHTML;
	}

	static public function renderFullListing($oListing){

		$sHTML = '<div class="container">
					<div class="big-image">
						<img src="assets/images/'.$oListing->sPhoto.'" alt="">
					</div>
					<div class="full-listing">
						<h3>'.$oListing->sTitle.'</h3>
						<p><span>Listing ID: </span>'.$oListing->iId.'</p>
						<p><span>Suburb: </span>'.$oListing->sSuburb.'</p>
						<p><span>Region: </span>'.$oListing->sRegion.'</p>
						<p><span>Date: </span>'.$oListing->sDate.'</p>
						<p><span>Sex: </span>'.$oListing->sSex.'<p>
						<p><span>Breed: </span>'.$oListing->sBreed.'</p>
						<hr>
						<p>'.$oListing->sDescription.'</p>
						<hr>
						<p><span>Contact: </span>'.$oListing->sContactName.'</p>
						<p><span>Contact Ph:</span>'.$oListing->sContactPh.'</p>
					</div>
				</div>';
		
		return $sHTML;
	}

	static public function renderSuccessStories($aSuccessStories){

		$sHTML = ' <div class="banner">	
					<h1>Success Stories</h1>
					<a class="login" href="login.php">Log In</a> or <a class="signup" href="registration.php">Sign Up</a> to create a listing
				</div>

				<div class="container">';

		for($i=0; $i<count($aSuccessStories); $i++){
		
		$oSuccessStory = $aSuccessStories[$i];

		$sHTML .= '<div class="success-story">
						<img src="assets/images/'.$oSuccessStory->sPhoto.'" alt="">
						<div class="info">
							<h3>'.$oSuccessStory->sTitle.'</h3>
							<p><span>Age:</span>'.$oSuccessStory->sAge.'</p>
							<p><span>Sex:</span>'.$oSuccessStory->sSex.'</p>
							<p><span>Breed:</span>'.$oSuccessStory->sBreed.'</p>
							<p><span>Time Missing:</span>'.$oSuccessStory->sTimeMissing.'</p>
							<p>'.$oSuccessStory->sStory.'</p>
						</div>
					</div>
				<hr>';
		}
				
		$sHTML .= '</div>';

		return $sHTML;
	}

	public function renderUserDetails($oUser){

		$sHTML = '<div class="banner">	
					<h1>View Your Member Details</h1>
					<a class="edit-details-button" href="user_edit_details.php">Edit details</a>	
				</div>

				<div class="container">
					<ul class="user-details">
						<li><span>User ID:</span>'.$oUser->iId.'</li>
						<li><span>Username:</span>'.$oUser->sUserName.'</li>
						<li><span>First Name:</span>'.$oUser->sFirstName.'</li>
						<li><span>Last Name:</span> '.$oUser->sLastName.'</li>
						<li><span>Organisation:</span>'.$oUser->sOrganisation.'</li>
						<li><span>Email:</span>'.$oUser->sEmail.'</li>
						<li><span>Address:</span>'.$oUser->sAddress.'</li>
						<li><span>Telephone:</span>'.$oUser->sPhone.'</li>
					</ul>

				</div>';

		return $sHTML;

	}

	public function renderUserListings($aUserListings){

		$sHTML = '<div class="container">';

		$sHTML .= '<div class="user-listing">	
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
				</div>';

		$sHTML .= '</div>';

		return $sHTML;
	}
}


?>