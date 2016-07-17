<?php 
require_once('includes/header.php');
require_once('includes/user.php');
require_once('includes/view.php');

// if not logged in, redirect to login page
if(isset($_SESSION['userid']) == false){ 
	header('Location:login.php');
}

$iUserId = $_SESSION['userid'];
$oUser = new User();
$oUser->load($iUserId);

echo View::renderUserDetails($oUser);

?>

<!-- <div class="banner">	
	<h1>View Your Member Details</h1>
	<a class="edit-details-button" href="user_edit_details.php">Edit details</a>	
</div>

<div class="container">
	<ul class="user-details">
		<li><span>User ID:</span>#8676</li>
		<li><span>Username:</span>john.doe</li>
		<li><span>First Name:</span>John</li>
		<li><span>Last Name:</span> Doe</li>
		<li><span>Organisation:</span>n/a</li>
		<li><span>Email:</span>johndoe@hotmail.com</li>
		<li><span>Address:</span>123 Sunnyvale Rd, Mt Albert, Auckland</li>
		<li><span>Telephone:</span>027 4897878</li>
	</ul>

</div> -->

<?php 
require_once('includes/footer.php');
?>

<!-- <div class="footer clearfix">
	<div class="lhs-footer">
		<p>Contact Us (09) 628 7564 &nbsp or &nbsp Email: jess@petfinder.co.nz</p>
	</div>
	<div class="rhs-footer">
	<p>&copy; Copyright PetFinder 2016</p>
	</div>
</div>
	
</body>
</html> -->