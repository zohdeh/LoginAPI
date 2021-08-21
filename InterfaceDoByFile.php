<?php
Interface InterfaceDoByFile
{
	public function getUser($userId);
	public function getAllUser();
	public function createNewUser($user);
	public function updateUser($userId);
	public function deleteUser($userId);
}
?>