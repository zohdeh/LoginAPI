<?php
Interface InterfaceDoByFile
{
	public function getUser(string $uId);
	public function getAllUser();
	public function createNewUser();
	public function updateUser($userId);
	public function deleteUser($userId);
}
?>