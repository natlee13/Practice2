<?php 

require_once('connection.php');

class User{

	public $iId;
	public $sFirstName;
	public $sLastName;
	public $sOrganisation;
	public $sEmail;
	public $sAddress;
	public $sPhone;
	public $sUserName;
	public $sPassword;
	public $sAdmin;

	public function __construct(){
		$this->iId = 0;
		$this->sFirstName = '';
		$this->sLastName = '';
		$this->sOrganisation = '';
		$this->sEmail = '';
		$this->sAddress = '';
		$this->sPhone = '';
		$this->sUserName = '';
		$this->sPassword = '';
		$this->sAdmin = '';

	}

	public function load($iId){

		$oConnection = new Connection();

		$sSQL = 'SELECT id, first_name, last_name, organisation, email, 
				address, phone, username, password, admin
				FROM users
				WHERE id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sFirstName = $aRow['first_name'];
		$this->sLastName = $aRow['last_name'];
		$this->sOrganisation = $aRow['organisation'];
		$this->sEmail = $aRow['email'];
		$this->sAddress = $aRow['address'];
		$this->sPhone = $aRow['phone'];
		$this->sUserName = $aRow['username'];
		$this->sPassword = $aRow['password'];
		$this->sAdmin = $aRow['admin'];

	}

	public function save(){

		$oConnection = new Connection();

		if($this->iId == 0){
			$sSQL = "INSERT INTO users (first_name, last_name, 
					organisation, email, address, phone, username, password, admin)
					VALUES ('".$oConnection->escape($this->sFirstName)."',
							'".$oConnection->escape($this->sLastName)."',
							'".$oConnection->escape($this->sOrganisation)."',
							'".$oConnection->escape($this->sEmail)."',
							'".$oConnection->escape($this->sAddress)."',
							'".$oConnection->escape($this->sPhone)."',
							'".$oConnection->escape($this->sUserName)."',
							'".$oConnection->escape($this->sPassword)."',
							'".$oConnection->escape($this->sAdmin)."')";
			
			$bSuccess = $oConnection->query($sSQL);

			if($bSuccess == true){
				$this->iId = $oConnection->getInsertId();
			}
		
		}else{

			$sSQL = "UPDATE users
					SET first_name = '".$oConnection->escape($this->sFirstName)."',
					last_name = '".$oConnection->escape($this->sLastName)."',
					organisation = '".$oConnection->escape($this->sOrganisation)."',
					email = '".$oConnection->escape($this->sEmail)."',
					address = '".$oConnection->escape($this->sAddress)."',
					phone = '".$oConnection->escape($this->sPhone)."',
					username = '".$oConnection->escape($this->sUserName)."',
					password = '".$oConnection->escape($this->sPassword)."',
					admin = '".$oConnection->escape($this->sAdmin)."'
					WHERE id = ".$oConnection->escape($this->iId);

			$oConnection->query($sSQL);
		}
	}

	public function loadByUserName($sUserName){
		
		$oConnection = new Connection();

		$sSQL = "SELECT id, first_name, last_name, organisation, email, address, phone,
				username, password, admin
				FROM users
				WHERE username = '".$oConnection->escape($sUserName)."'";

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		if($aRow == true){

			$this->iId = $aRow['id'];
			$this->sFirstName = $aRow['first_name'];
			$this->sLastName = $aRow['last_name'];
			$this->sOrganisation = $aRow['organisation'];
			$this->sEmail = $aRow['email'];
			$this->sAddress = $aRow['address'];
			$this->sPhone = $aRow['phone'];
			$this->sUserName = $aRow['username'];
			$this->sPassword = $aRow['password'];
			$this->sAdmin = $aRow['admin'];

			return true;

		}else{

			return false;
		}
	}
}

//testing - load user...................................
// $oUser = new User();
// $oUser->load(1);

// echo '<pre>';
// print_r($oUser);
// echo '</pre>';


// ...............................testing save..............................

//save new user
// $oUser = new User();

// $oUser->sFirstName = 'Joe';
// $oUser->sLastName = 'Blogs';
// $oUser->save();

// echo '<pre>';
// print_r($oUser);
// echo '</pre>';

//change existing user details
// $oUser = new User();
// $oUser->load(1);
// $oUser->sFirstName = 'xxxxBob';
// $oUser->sPhone = '(09) 647 3930';
// $oUser->sAddress = '1234 Everglade Rd, Mt Eden, Auckland';
// $oUser->save();

// echo '<pre>';
// print_r($oUser);
// echo '</pre>';

//testing loadByUserName...........................
// $oUser = new User();
// $oUser->loadByUserName('nat1');

// echo '<pre>';
// print_r($oUser);
// echo '</pre>';
?>