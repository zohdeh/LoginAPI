<?php
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/InterfaceDoByFile.php';
class doByJson implements InterfaceDoByFile
{
	private $jsonfile;
	private $path;
	private $myarray;
	private $uId;
	public function __construct()
	{
		$this->path = $_SERVER['DOCUMENT_ROOT'].'/API/myuser.txt';
		$this->myarray= array (array("userId"=>'10',"pwd"=>'123'),array("userId"=>'11',"pwd"=>'456'));
		$this->uId=null;   
	}
	public function __destruct()
	{
		
	}
	public function getUser($uID)
	{
		echo $this->uId;
		$arrayItems = count($this->myarray);
		echo ($arrayItems);
		while ($i<=$arrayItems)
		{
		if ( $this->myarray[$i]['userId']==$userId)
				var_dump( myarray[$i]);
		else
		$i++;
		}
		return null;
		/* $response['body'] = json_encode($foundUser);
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
		return $response; */ 
		
	}
	public function searchForId($uId)
	{
		$arrayItems = count($this->myarray);
		echo ($arrayItems);
		while ($i<=$arrayItems)
		{
			if ($this->myarray[$i]['userId']==$userId)
			return $i;
		}
		return null;
		 
			/* if ($tarray['userID']==$userID)
			 return $myarray.current;*/
	
   
	}
	
	
	public function getAllUser()
	{
		var_dump ($this->myarray);
		
		/* 
		$usersJson = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/API/user.txt');
		$response['body']=json_encode($usersJson);
		$response['status_code_header'] = 'HTTP/1.1 200 OK';
        return $response; */
		
		
	}
	public function createNewUser()
	{
		/* $usersJson = file_get_contents('php://input');
		$user =(array) json_encode($userJson);
		if (! $this->validateUser($input))
			return unknowninput();
		addUserToFile($user);
		$response['status_code_header'] = 'HTTP/1.1 201 Created';
        $response['body'] = null;
        return $response; */
		
		
	}
	//private addUserToFile($newUser)
	//{
		/* //$usersJson =(array)json_encode( file_get_contents($this->path));
		//array_push($userJson,$newUser);
		file_put_contents($this->path,$newUser,File_append); */
	//}
	private function validateUser($input)
    {
        if (! isset($input['UserId'])) {
            return false;
        }
        if (! isset($input['pwd'])) {
            return false;
        }
		if (! isset($input['phone'])) {
            return false;
        }
        return true;
    }
	public function updateUser($userId)
	{
		
	}
	public function deleteUser($userId)
	{
		
	}
}
?>