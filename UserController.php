<?php
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/doByJson.php';
class userController
{
	private $requestMethod;
	private $users;
	private $userId;
	private $processRequest;
	public function __construct($uId,$rMethod)
	{
		$requestMethod = $rMethod;
		$userId = $uId;
		$processRequest = new doByJson();
	}
	
	public function callAPI()
	{
		switch ($this->requestMethod)
		{
			case 'GET':
				{
					if( $this->userId )
					$processRequest->getUser($this->userId);
					else
					$processRequest->getAllUser();
				}
				
			case 'POST':
				$processRequest->createNewUser();
			case 'PUT':
				$processRequest->updateUser($this->userId);
			case 'DELETE':
				$processRequest->deleteUser($this->userId);
		}
	}
}
?>