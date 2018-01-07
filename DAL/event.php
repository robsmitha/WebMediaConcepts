<?php
/*
Author:			This code was generated by DALGen version 1.1.0.0 available at https://github.com/H0r53/DALGen 
Date:			12/22/2017
Description:	Creates the DAL class for  event table and respective stored procedures

*/



class Event {

	// This is for local purposes only! In hosted environments the db_settings.php file should be outside of the webroot, such as: include("/outside-webroot/db_settings.php");
	protected static function getDbSettings() { return "DAL/db_localsettings.php"; }

	/******************************************************************/
	// Properties
	/******************************************************************/

	protected $Id;
	protected $Name;
	protected $Description;
	protected $ImgUrl;
	protected $StartDate;
	protected $EndDate;
	protected $Location;
	protected $EventTypeId;
	protected $TicketLink;


	/******************************************************************/
	// Constructors
	/******************************************************************/
	public function __construct() {
		$argv = func_get_args();
		switch( func_num_args() ) {
			case 0:
				self::__constructBase();
				break;
			case 1:
				self::__constructPK( $argv[0] );
				break;
			case 9:
				self::__constructFull( $argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5], $argv[6], $argv[7], $argv[8] );
		}
	}


	public function __constructBase() {
		$this->Id = 0;
		$this->Name = "";
		$this->Description = "";
		$this->ImgUrl = "";
		$this->StartDate = "";
		$this->EndDate = "";
		$this->Location = "";
		$this->EventTypeId = 0;
		$this->TicketLink = "";
	}


	public function __constructPK($paramId) {
		$this->load($paramId);
	}


	public function __constructFull($paramId,$paramName,$paramDescription,$paramImgUrl,$paramStartDate,$paramEndDate,$paramLocation,$paramEventTypeId,$paramTicketLink) {
		$this->Id = $paramId;
		$this->Name = $paramName;
		$this->Description = $paramDescription;
		$this->ImgUrl = $paramImgUrl;
		$this->StartDate = $paramStartDate;
		$this->EndDate = $paramEndDate;
		$this->Location = $paramLocation;
		$this->EventTypeId = $paramEventTypeId;
		$this->TicketLink = $paramTicketLink;
	}


	/******************************************************************/
	// Accessors / Mutators
	/******************************************************************/

	public function getId(){
		return $this->Id;
	}
	public function setId($value){
		$this->Id = $value;
	}
	public function getName(){
		return $this->Name;
	}
	public function setName($value){
		$this->Name = $value;
	}
	public function getDescription(){
		return $this->Description;
	}
	public function setDescription($value){
		$this->Description = $value;
	}
	public function getImgUrl(){
		return $this->ImgUrl;
	}
	public function setImgUrl($value){
		$this->ImgUrl = $value;
	}
	public function getStartDate(){
		return $this->StartDate;
	}
	public function setStartDate($value){
		$this->StartDate = $value;
	}
	public function getEndDate(){
		return $this->EndDate;
	}
	public function setEndDate($value){
		$this->EndDate = $value;
	}
	public function getLocation(){
		return $this->Location;
	}
	public function setLocation($value){
		$this->Location = $value;
	}
	public function getEventTypeId(){
		return $this->EventTypeId;
	}
	public function setEventTypeId($value){
		$this->EventTypeId = $value;
	}
	public function getTicketLink(){
		return $this->TicketLink;
	}
	public function setTicketLink($value){
		$this->TicketLink = $value;
	}


	/******************************************************************/
	// Public Methods
	/******************************************************************/


	public function load($paramId) {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_event_Load(?)');
		$stmt->bind_param('i', $paramId);
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);

		while ($row = $result->fetch_assoc()) {
		 $this->setId($row['Id']);
		 $this->setName($row['Name']);
		 $this->setDescription($row['Description']);
		 $this->setImgUrl($row['ImgUrl']);
		 $this->setStartDate($row['StartDate']);
		 $this->setEndDate($row['EndDate']);
		 $this->setLocation($row['Location']);
		 $this->setEventTypeId($row['EventTypeId']);
		 $this->setTicketLink($row['TicketLink']);
		}
	}


	public function save() {
		if ($this->getId() == 0)
			$this->insert();
		else
			$this->update();
	}

	/******************************************************************/
	// Private Methods
	/******************************************************************/



	private function insert() {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_event_Add(?,?,?,?,?,?,?,?)');
		$arg1 = $this->getName();
		$arg2 = $this->getDescription();
		$arg3 = $this->getImgUrl();
		$arg4 = $this->getStartDate();
		$arg5 = $this->getEndDate();
		$arg6 = $this->getLocation();
		$arg7 = $this->getEventTypeId();
		$arg8 = $this->getTicketLink();
		$stmt->bind_param('ssssssis',$arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8);
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);
		while ($row = $result->fetch_assoc()) {
			// By default, the DALGen generated INSERT procedure returns the scope identity as id
			$this->load($row['id']);
		}
	}


	private function update() {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_event_Update(?,?,?,?,?,?,?,?,?)');
		$arg1 = $this->getId();
		$arg2 = $this->getName();
		$arg3 = $this->getDescription();
		$arg4 = $this->getImgUrl();
		$arg5 = $this->getStartDate();
		$arg6 = $this->getEndDate();
		$arg7 = $this->getLocation();
		$arg8 = $this->getEventTypeId();
		$arg9 = $this->getTicketLink();
		$stmt->bind_param('issssssis',$arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8,$arg9);
		$stmt->execute();
	}

	private static function setNullValue($value){
		if ($value == "")
			return null;
		else
			return $value;
	}

	/******************************************************************/
	// Static Methods
	/******************************************************************/



	public static function loadall() {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_event_LoadAll()');
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);
		if ($result->num_rows > 0) {
			$arr = array();
			while ($row = $result->fetch_assoc()) {
				$event = new Event($row['Id'],$row['Name'],$row['Description'],$row['ImgUrl'],$row['StartDate'],$row['EndDate'],$row['Location'],$row['EventTypeId'],$row['TicketLink']);
				$arr[] = $event;
			}
			return $arr;
		}
		else {
			//die("The query yielded zero results.No rows found.");
		}
	}


	public static function remove($paramId) {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_event_Delete(?)');
		$stmt->bind_param('i', $paramId);
		$stmt->execute();
	}


	public static function search($paramId,$paramName,$paramDescription,$paramImgUrl,$paramStartDate,$paramEndDate,$paramLocation,$paramEventTypeId,$paramTicketLink) {
		include(self::getDbSettings());
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare('CALL usp_event_Search(?,?,?,?,?,?,?,?,?)');
		$arg1 = Event::setNullValue($paramId);
		$arg2 = Event::setNullValue($paramName);
		$arg3 = Event::setNullValue($paramDescription);
		$arg4 = Event::setNullValue($paramImgUrl);
		$arg5 = Event::setNullValue($paramStartDate);
		$arg6 = Event::setNullValue($paramEndDate);
		$arg7 = Event::setNullValue($paramLocation);
		$arg8 = Event::setNullValue($paramEventTypeId);
		$arg9 = Event::setNullValue($paramTicketLink);
		$stmt->bind_param('issssssis',$arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8,$arg9);
		$stmt->execute();

		$result = $stmt->get_result();
		if (!$result) die($conn->error);
		if ($result->num_rows > 0) {
			$arr = array();
			while ($row = $result->fetch_assoc()) {
				$event = new Event($row['Id'],$row['Name'],$row['Description'],$row['ImgUrl'],$row['StartDate'],$row['EndDate'],$row['Location'],$row['EventTypeId'],$row['TicketLink']);
				$arr[] = $event;
			}
			return $arr;
		}
		else {
			//die("The query yielded zero results.No rows found.");
		}
	}
}
