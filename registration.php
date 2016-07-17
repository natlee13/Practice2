<?php

require_once('includes/header.php'); 
require_once('includes/form.php');
require_once('includes/user.php');

$oForm = new Form();

if(isset($_POST['submit']) == true){ //if user clicks submit

    $oForm->aData = $_POST; // put sticky data in form for filled in fields if an error comes up

    if($_POST['first_name'] == ''){ // if the input for firstname is empty
        $oForm->addError('first_name', 'Please enter first name'); //display this error
    }

    if($_POST['last_name'] == ''){
        $oForm->addError('last_name', 'Please enter last name');
    }

    if($_POST['organisation'] == ''){
        $oForm->addError('organisation', 'Please enter organisation or n/a');
    }

    if($_POST['email'] == ''){
        $oForm->addError('email', 'Please enter your email');
    }

    if($_POST['address'] == ''){
        $oForm->addError('address', 'Please enter address');
    }

    if($_POST['phone'] == ''){
        $oForm->addError('phone', 'Please enter your phone number');
    }

    if($_POST['username'] == ''){
        $oForm->addError('username', 'Please choose a username');
    }

    if($_POST['password'] == ''){
        $oForm->addError('password', 'Please choose a password');
    }

    if($_POST['confirmpw'] == '' || $_POST['password'] != $_POST['confirmpw']){ //if the confirm password input is empty or 
        //is not the same as the password
        $oForm->addError('confirmpw', 'Please confirm password');
    }

    if(count($oForm->aErrors) == 0 && $_POST['password'] == $_POST['confirmpw']){  //if there are no errors and the password and confirm password fields match

    $oUser = new User(); //create a new user with the following values

    $oUser->sFirstName = $_POST['first_name'];
    $oUser->sLastName = $_POST['last_name'];
    $oUser->sOrganisation = $_POST['organisation'];
    $oUser->sEmail = $_POST['email'];
    $oUser->sAddress = $_POST['address'];
    $oUser->sPhone = $_POST['phone'];
    $oUser->sUsername = $_POST['username'];
    $oUser->sPassword = $_POST['password'];

    $oUser->save();

    header('Location:member_homepage.php'); //redirect to the member homepage
    
    }
}

$oForm->open();
$oForm->makeTextInput('First Name:', 'first_name','');
$oForm->makeTextInput('Last Name:', 'last_name', '');
$oForm->makeTextInput('Organisation:', 'organisation', 'Type n/a if not an organisation');
$oForm->makeTextInput('Email:', 'email', '');
$oForm->makeTextInput('Address:', 'address', '');
$oForm->makeTextInput('Phone:', 'phone', '');
$oForm->makeTextInput('Choose Username', 'username', '');
$oForm->makeTextInput('Choose Password', 'password', '');
$oForm->makeTextInput('Confirm Password', 'confirmpw', '');
$oForm->makeSubmit('Sign Up', 'submit', 'signup', '');
$oForm->close();
?>


<div class="form-banner">	
	<h1>Sign Up to Become a Member</h1>
	<p>Sign up to create a listing or <a class="login" href="login.php">Login</a></p>
</div>

<div class="container">

<?php 
echo $oForm->sHTML; 
?>	
	<!-- <form action="" method="POST" class="pure-form pure-form-aligned">
    <fieldset>

        <div class="pure-control-group">
            <label for="firstname">First Name:</label>
            <input id="firstname" type="text" name="firstname">
        </div>

        <div class="pure-control-group">
            <label for="lastname">Last Name:</label>
            <input id="lastname" type="text" name="lastname">
        </div>

        <div class="pure-control-group">
            <label for="organisation">Organisation:</label>
            <input id="organisation" type="text" name="organisation" placeholder="Type N/A if not an organisation">
        </div>

        <div class="pure-control-group">
            <label for="email">Email:</label>
            <input id="email" type="text" name="email">
        </div>

        <div class="pure-control-group">
            <label for="address">Address:</label>
            <input id="address" type="text" name="address">
        </div>

        <div class="pure-control-group">
            <label for="phone">Telephone:</label>
            <input id="phone" type="text" name="phone">
        </div>

       <div class="pure-control-group">
            <label for="username">Choose Username:</label>
            <input id="username" type="text" name="username">
        </div>

        <div class="pure-control-group">
            <label for="password">Choose Password:</label>
            <input id="password" type="text" name="password">
        </div>

        <div class="pure-control-group">
            <label for="confirmpw">Confirm Password:</label>
            <input id="confirmpw" type="text" name="confirmpw">
        </div>

        <div class="pure-controls">
			<button type="submit" class="pure-button signup" name="submit">Sign Up</button>
        </div>
    </fieldset>
</form>	 -->
	
</div>

<?php 

require_once('includes/footer.php') 

?>