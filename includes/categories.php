<?php 

require_once('connection.php');
require_once('listings.php');

class Category{

	public $iId;
	public $sCategoryName;
	public $sCategoryDescription;
	public $aLostListings;
	public $aFoundListings;

	public function __construct(){
		$this->iId = 0;
		$this->sCategoryName = '';
		$this->sCategoryDescription = '';
		$this->aLostListings = [];
		$this->aFoundListings = [];
	}

	public function load($iId){

		$oConnection = new Connection();

		$sSQL = 'SELECT id, category_name, category_description
				FROM categories
				WHERE id = ' .$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sCategoryName = $aRow['category_name'];
		$this->sCategoryDescription = $aRow['category_description'];


		$sSQL = 'SELECT id
				FROM listings
				WHERE status = "lost" AND category_id = '.$iId;

				// SELECT * FROM `listings` WHERE `status` = 'lost' AND `category_id` = 1

		$oResultSet = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch($oResultSet)){
			
			$iLostListingId = $aRow['id'];

			$oLostListing = new Listing();
			$oLostListing->load($iLostListingId);
			$this->aLostListings[] = $oLostListing;
			// $this->aFoundListings[] = $oFoundListing;
		}

		$sSQL = 'SELECT id
				FROM listings
				WHERE status = "found" AND category_id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch($oResultSet)){
			
			$iFoundListingId = $aRow['id'];

			$oFoundListing = new Listing();
			$oFoundListing->load($iFoundListingId);
			$this->aFoundListings[] = $oFoundListing;
		}
	}

	public function save(){

		$oConnection = new Connection();

		if($this->iId == 0){
			// $sSQL = "INSERT INTO categories (category_name, category_description)
			// 		VALUES ('".$oConnection->escape($this->sCategoryName)."',
			// 				'".$oConnection->escape($this->sCategoryDescription)."')";
			
			$sSQL = "INSERT INTO categories (category_name, category_description) 
					 VALUES ('".$oConnection->escape($this->sCategoryName)."', '".$oConnection->escape($this->sCategoryDescription)."')";

			$bSuccess = $oConnection->query($sSQL);

			if($bSuccess == true){
				$this->iId = $oConnection->getInsertId();
			}

		}else{
				$sSQL = "UPDATE categories 
				SET category_name = '".$this->sCategoryName."', 
					category_description = '".$this->sCategoryDescription."' 
					WHERE id = " .$this->iId;
				
			$oConnection->query($sSQL);
	
		}
	}
}

//testing load.........................................

// $oCategory = new Category();
// $oCategory->load(1);

// echo '<pre>';
// print_r($oCategory);
// echo '</pre>';


//testing save............................................
// $oCategory = new Category();
// $oCategory->sCategoryName = 'vvvRabbit';
// $oCategory->sCategoryDescription = 'vvvRabbits that have gone missing or have been found';
// $oCategory->save();

// echo '<pre>';
// print_r($oCategory);
// echo '</pre>';

//testing save (into existing category)............................................
// $oCategory = new Category();
// $oCategory->load(2);
// $oCategory->sCategoryName = 'Dog';
// $oCategory->sCategoryDescription = 'Dogs that have gone missing or have been found';
// $oCategory->save();

// echo '<pre>';
// print_r($oCategory);
// echo '</pre>';
?>