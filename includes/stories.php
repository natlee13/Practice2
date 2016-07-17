<?php 

require_once('connection.php');

class Success_Story{

	public $iId;
	public $sPhoto;
	public $sTitle;
	public $sAge;
	public $sSex;
	public $sBreed;
	public $sTimeMissing;
	public $sStory;

	public function __construct(){

		$this->iId = 0;
		$this->sPhoto = '';
		$this->sTitle = '';
		$this->sAge = '';
		$this->sSex - '';
		$this->sBreed = '';
		$this->sTimeMissing = '';
		$this->sStory = '';
	}

	public function load($iId){

		$oConnection = new Connection;

		$sSQL = 'SELECT id, photo, title, age, sex, breed, time_missing, story
				FROM success_stories
				WHERE id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sPhoto = $aRow['photo'];
		$this->sTitle = $aRow['title'];
		$this->sAge = $aRow['age'];
		$this->sSex = $aRow['sex'];
		$this->sBreed = $aRow['breed'];
		$this->sTimeMissing = $aRow['time_missing'];
		$this->sStory = $aRow['story'];

	}

	public function save(){

		$oConnection = new Connection();

		if($this->iId == 0){

			$sSQL = "INSERT INTO success_stories (photo, title, age, sex, breed, 
					time_missing, story)
					VALUES ('".$oConnection->escape($this->sPhoto)."',
							'".$oConnection->escape($this->sTitle)."',
							'".$oConnection->escape($this->sAge)."',
							'".$oConnection->escape($this->sSex)."',
							'".$oConnection->escape($this->sBreed)."',
							'".$oConnection->escape($this->sTimeMissing)."',
							'".$oConnection->escape($this->sStory)."')";
			
			$bSuccess = $oConnection->query($sSQL);

			if($bSuccess == true){
				$this->iId = $oConnection->getInsertId();
			}
		
		}else{

			$sSQL = "UPDATE success_stories
					SET photo = '".$oConnection->escape($this->sPhoto)."',
						title = '".$oConnection->escape($this->sTitle)."',
						age = '".$oConnection->escape($this->sAge)."',
						sex = '".$oConnection->escape($this->sSex)."',
						breed = '".$oConnection->escape($this->sBreed)."',
						time_missing = '".$oConnection->escape($this->sTimeMissing)."',
						story = '".$oConnection->escape($this->sStory)."'
					WHERE id = ".$this->iId; //does this need escape?

			$oConnection->query($sSQL);
		}
	}
}


//testing load...........................

// $oSuccessStory = new Success_Story();
// $oSuccessStory->load(2);

// echo '<pre>';
// print_r($oSuccessStory);
// echo '</pre>';

//testing save into existing............................

// $oSuccessStory = new Success_Story();
// $oSuccessStory->load(2);

// $oSuccessStory->sTitle = 'Found after 8 months lost';
// $oSuccessStory->sAge = '12 years';
// $oSuccessStory->sSex = 'female, desexed';
// $oSuccessStory->sBreed = 'Moggie';
// $oSuccessStory->save();

// echo '<pre>';
// print_r($oSuccessStory);
// echo '</pre>';



//testing save into new .....................................
// $oSuccessStory = new Success_Story();

// $oSuccessStory->sPhoto = 'dot.jpg';
// $oSuccessStory->sTitle = 'Dot';
// $oSuccessStory->sAge = '12 years';
// $oSuccessStory->sSex = 'female';
// $oSuccessStory->sBreed = 'Moggie';
// $oSuccessStory->sTimeMissing = '6 weeks';
// $oSuccessStory->sStory = 'Blah blah';
// $oSuccessStory->save();

// echo '<pre>';
// print_r($oSuccessStory);
// echo '</pre>';


?>
