<?php
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/doByJson.php';
class userController
{
	private $requestMethod;
	private $users;
	private $userId;
	private $password;
	public function __construct($uId,$rMethod)
	{
		$this->requestMethod = $rMethod;
		$this->userId = $uId;
		
				
	}
	
	public function callAPI()
	{
		
		$processRequest =new doByJson();
		switch ($this->requestMethod)
		{
			case 'GET':
				{
					echo $this->userId;
					if( $this->userId )
					{
					echo '3';
					$u=$this->userId;
					$processRequest->getUser($u);
					}
					else
					{
						echo '2';
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