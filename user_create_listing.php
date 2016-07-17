<?php 
require_once('includes/header.php');
require_once('includes/form.php');
require_once('includes/listings.php');

$oForm = new Form();

if(isset($_POST['submit']) == true){

    $oListing = new Listing();

    //uploading photo
    $aFileDetails = $_FILES['photo'];
    $sNewFileName = time().$aFileDetails['name'];
    $to = dirname(".").'/assets/images/'.$sNewFileName;

    move_uploaded_file($aFileDetails['tmp_name'], $to);

    $oListing->iUserId = $_POST['user_id'];
    $oListing->sStatus = $_POST['status'];
    $oListing->iCategoryId = $_POST['category_id'];
    $oListing->sTitle = $_POST['title'];
    $oListing->sPhoto = $sNewFileName;
    $oListing->sSuburb = $_POST['suburb'];
    $oListing->sRegion = $_POST['region'];
    $oListing->sDate = $_POST['date'];
    $oListing->sSex = $_POST['sex'];
    $oListing->sBreed = $_POST['breed'];
    $oListing->sContactName = $_POST['contact_name'];
    $oListing->sContactPhone = $_POST['contact_ph'];
    $oListing->sDescription = $_POST['description'];

    $oListing->save();

    // header('Location: user_view_listings.php');
}

$oForm->open();
$oForm->makeTextInput('User ID:', 'user_id', 'Enter your user id number');
$oForm->makeSelectInput('List in:', 'status', ['lost'=>'Lost','found'=>'Found']);
$oForm->makeSelectInput('Species:', 'category_id', CategoryManager::listCategories());
$oForm->makeTextInput('Listing Title:', 'title', 'e.g Help Find Fluffy');
$oForm->makeFileInput('Upload Photo:', 'photo');
$oForm->makeTextInput('Suburb:', 'suburb', 'Suburb lost from/found in');
$oForm->makeTextInput('Region:', 'region', 'Region');
$oForm->makeTextInput('Date:', 'date', 'e.g 23/6/16 or 23rd June 2016');
$oForm->makeTextInput('Sex:', 'sex', 'e.g Male, neutered');
$oForm->makeTextInput('Breed:', 'breed', 'e.g Labrador');
$oForm->makeTextInput('Contact Person:', 'contact_name', 'Name of person to contact re: listing');
$oForm->makeTextInput('Contact Phone:', 'contact_ph', 'Phone number of contact person');
$oForm->makeTextArea('Description', 'description', 'Add a description include, name if known, colour, age, any distinctive markings, collars or tags, if microchipped, microchip number etc.');
$oForm->makeSubmit('Create', 'submit', ' pure-button-primary');
$oForm->close();

?>

<div class="form-banner">	
	<h1>Create a New Lost or Found Listing</h1>
	<p>Enter information for your listing in the form below</p>
</div>

<div class="container">

<?php 
echo $oForm->sHTML; 
?>
<!-- 	<form action="" method="POST" class="pure-form pure-form-aligned">
    <fieldset>

    	<div class="pure-control-group">
            <label for="userid">User ID:</label>
            <input id="userid" type="text" name="userid"placeholder="Enter your user ID number">
        </div>

    	<div class="pure-control-group">
            <label for="status">List in:</label>
        	<select id="status" name="status">
            	<option>Lost</option>
            	<option>Found</option>
        	</select>
        </div>

        <div class="pure-control-group">
            <label for="type">Species:</label>
        	<select id="type" name="type">
            	<option>Cat</option>
            	<option>Dog</option>
        	</select>
        </div>

        <div class="pure-control-group">
            <label for="title">Listing Title</label>
            <input id="title" type="text" name="title" placeholder="Listing Title">
        </div>

        <div class="pure-control-group">
            <label for="photo">Photo:</label>
            <input id="photo" type="file" name="photo" placeholder="Upload Photo">
        </div>

        <div class="pure-control-group">
            <label for="suburb">Suburb</label>
            <input id="suburb" type="text" name="suburb" placeholder="eg. Manurewa ">
        </div>

        <div class="pure-control-group">
            <label for="region">Region</label>
            <input id="region" type="text" name="region" placeholder="eg. Auckland">
        </div>

        <div class="pure-control-group">
            <label for="date">Date Lost/Found:</label>
            <input id="date" type="text" name="date" placeholder="eg. 23/06/16">
        </div>

        <div class="pure-control-group">
            <label for="sex">Sex:</label>
            <input id="sex" type="text" name="sex" placeholder="eg. Male, neutered">
        </div>

        <div class="pure-control-group">
            <label for="breed">Breed:</label>
            <input id="breed" type="text" name="breed" placeholder="eg. Labrador">
        </div>

        <div class="pure-control-group">
            <label for="contact_name">Contact Person:</label>
            <input id="contact_name" type="text" name="contact_name" placeholder="eg. James">
        </div>

        <div class="pure-control-group">
            <label for="contact_ph">Contact Phone:</label>
            <input id="contact_ph" type="text" name="contact_ph" placeholder="eg. (09) 392 7583">
        </div>

        <div class="pure-control-group">
            <label for="description">Description:</label>
            <textarea id="description" type="text" name="description" placeholder="Add a description include, name if known, colour, age, any distinctive markings, collars or tags, if microchipped, microchip number etc."></textarea>
        </div>

        <div class="pure-controls">
			<button type="submit" class="pure-button pure-button-primary" name="submit">Create</button>
        </div>
    </fieldset>
</form> -->

</div>

<?php 
require_once('includes/footer.php') 
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