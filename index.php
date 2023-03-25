<?php

require_once("rest/dao/ProjectDao.class.php");
$project_dao = new ProjectDao();

$results = $project_dao->get_all();
print_r($results);

/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS, PATCH');
require 'vendor/autoload.php';

try{
    Flight::register('db', 'PDO', 
    array('mysql:host=localhost;dbname=lab4_db','root','root'));
    echo "Connected succesfully!";
} catch(PDOException $e){
    echo "Error". $e->getMessage();
}

echo "Hello there!"*/



?>