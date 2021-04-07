<?php
header("Content-type: text/html; charset=utf-8");
require_once ("vendor\autoload.php");
use Config\Connection; 
use App\Model\ModelUsers;

if(isset($_POST['user_name'])) {

    $name  = $_POST['user_name'];

    // connect to the PostgreSQL database
    $pdo = Connection::get()->connect();

    $modUsers = new ModelUsers($pdo);
    $valUsers = $modUsers->getUserNameTokenExists($name);
   
    if($valUsers['0']['count'] > 0){
        echo "Nome já existe";
    }else
    {
        echo "OK";
    }
    exit();
}