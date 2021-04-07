<?php 
header("Content-type: text/html; charset=utf-8");
require_once ("vendor\autoload.php");
use Config\Connection; 
use App\Model\ModelUsers;

 // connect to the PostgreSQL database
 $pdo = Connection::get()->connect();

 $modUsers = new ModelUsers($pdo);
//  $colunas = $modUsers->getColumns();
 $valUsers = $modUsers->getUsers();
 $getUserExists = $modUsers->getUserNameTokenExists('diego.rocha');

echo "<pre>";
var_dump($getUserExists);
echo "</pre>";