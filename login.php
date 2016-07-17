<?php

require_once('includes/header.php');
require_once('includes/form.php');
require_once('includes/user.php');

$oForm = new Form();

if(isset($_POST['submit']) == true){ //if the user clicks submit

	$oForm->aData = $_POST; //sticky data in filled in inputs if error comes up

	if($_POST['username'] == ''){ //if username is empty
		$oForm->addError('username','Please enter your username'); //display this error
	}

	if($_POST['password'] == ''){ //if password is empty
		$oForm->addError('password','Please enter your password'); // display this error
	}

	if(count($oForm->aErrors) == 0){ //if there are no errors i.e empty inputs

		$oUser = new User(); //create a new user
		$bSuccess = $oUser->loadByUserName($_POST['username']); //and load by username

		if($bSuccess == true){ //if able to load

			if($_POST['password'] == $oUser->sPassword){ //if the password is correct

				$_SESSION['userid'] = $oUser->iId; //create a session using the user id, records who is logged in
			}

			header('Location:member_homepage.php'); //redirect logged in user to the member homepage.


		}else{

			$bSuccess == false; //if cannot load by username i.e. incorrect password
			header('Location: login.php'); //redirect back to login page
		}
	}
}

$oForm->open();
$oForm->makeTextInput('Username', 'username','');
$oForm->makeTextInput('Password', 'password','');
$oForm->makeSubmit('Login', 'submit', 'login','');
$oForm->close();
?>

<div class="form-banner">	
	<h1>Login</h1>
	<p>Log in to create a listing or <a class="signup" href="registration.php">Sign Up</a>

</div>

<div class="container">	

<?php 
echo $oForm->sHTML; 
?>

</div>

<?php 
require_once('includes/footer.php') 
?>