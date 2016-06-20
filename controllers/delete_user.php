<?php
/**
 * Created by PhpStorm.
 * User: carlos.alonso
 * Date: 04/06/2016
 * Time: 14:35
 */

// include database and object file
include_once '../config/database.php';
include_once '../classes/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$user = new User($db);

// get product id
$data = json_decode(file_get_contents("php://input"));

// set product id to be deleted
$user->id = $data->id;

// delete the product
if($user->delete()){
    echo "Usuario Borrado.";
}

// if unable to delete the product
else{
    echo "Imposible borrar Usuario.";
}