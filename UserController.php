<?php
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/doByJson.php';
class userController
{
	private $requestMethod;
	private $users;
	private $userId;
	private $password
	public function __construct($uId,$pwd,$rMethod)
	{
		$this->requestMethod = $rMethod;
		$this->userId = $uId;
		$this->password = $pwd;
				
	}
	
	public function callAPI()
	{
		
		$processRequest =new doByJson();
		switch ($this->requestMethod)
		{
			case 'GET':
				{
					if( $this->userId )
					$processRequest->getUser($this->userId,$this->password);
					else
					{
						
					$processRequest->getAllUser();
					}
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