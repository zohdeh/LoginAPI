<?php
//namespace API\Controller;
include $_SERVER['DOCUMENT_ROOT'].'/API/Controller/userController.php';



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
$requestMethod = $_SERVER["REQUEST_METHOD"];
$userId = null;

$findoutRequest = new userController($userId,$requestMethod);
$findoutRequest->callAPI();

?>