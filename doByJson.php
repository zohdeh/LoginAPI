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
		
		$response['body'] = json_encode($result);
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
		return $response;
	}
	private function findByUserId($userId)
	{
		$usersJson = fopen('$path',"r");
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
		$usersJson = fopen('$path',"r");
		
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($usersJson);
		fclose($usersJson);
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