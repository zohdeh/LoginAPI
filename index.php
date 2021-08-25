<?php
//namespace API\Controller;
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/userController.php';



header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json;");


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
$requestMethod = $_SERVER["REQUEST_METHOD"];
$userId = '11';
$findoutRequest = new userController($userId,$requestMethod);
$findoutRequest->callAPI();

?>