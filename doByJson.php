<?php
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/InterfaceDoByFile.php';
class doByJson implements InterfaceDoByFile
{
	private $jsonfile;
	public function __construct()
	{
		$path = $_SERVER['DOCUMENT_ROOT'].'/API/user.json';
		//$jsonfile = file_get_contents($path);
	}
	public function __destruct()
	{
		
	}
	public function getUser($userID)
	{
		$result = findByUserId($userId);
		if ( !$result )
			return notFoundUser();
		else
		
		$response['GET'] = json_decode($result);
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
		return $response;
	}
	private function findByUserId($userId)
	{
		$usersJson = file_get_contents('$path');
		$result= json_decode($usersJson);
		foreach ($result as $user)
		{
			if ($user->userId == $userId)
				return $user;
			else 
				return false;
	}  }
	public function getAllUser()
	{
		$usersJson = file_get_contents('$path');
		$response = json_decode($usersJson);
		return $response;
		
	}
	public function createNewUser($user)
	{
		
	}
	public function updateUser($userId)
	{
		
	}
	public function deleteUser($userId)
	{
		
	}
}
?>