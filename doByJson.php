<?php
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/InterfaceDoByFile.php';
class doByJson implements InterfaceDoByFile
{
	private $jsonfile;
	private $path;
	public function __construct()
	{
		$this->path = $_SERVER['DOCUMENT_ROOT'].'/API/myuser.txt';
		
	}
	public function __destruct()
	{
		
	}
	public function getUser($userID,$pwd)
	{
		$foundUser= findByUserId($userId,$pwd);
		if ( !foundUser )
			return notFoundUser();
		else
		
		$response['body'] = json_encode($foundUser);
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
		return $response;
	}
	function searchForId($userId,$pwd, $array)
	{
		foreach ($array as $key => $val)
	{
       if ($val['userId'] === $userId and $val['pwd'] === $pwd)
	   {
           return $key;
		   
       }
   }
   return null;
}
	private function findByUserId($userId,$pwd)
	{
		
		$usersJson = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/API/user.txt');
		$result= json_decode($usersJson);
		$foundKey = searchForId($userId,$pws,$result);
		if ($foundKey ==null)
			return null;
			
		else
			return $result[$foundKey];
		
	}  
	public function getAllUser()
	{
		
		$usersJson = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/API/user.txt');
		
		$response['body']=json_encode($usersJson);
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
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