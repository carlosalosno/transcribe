<?php
/**
 * Created by PhpStorm.
 * User: carlos.alonso
 * Date: 04/06/2016
 * Time: 14:28
 */

// include database and object files
include_once '../config/database.php';
include_once '../classes/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$user = new User($db);

// get id of product to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of product to be edited
$user->id = $data->id;

// set product property values
$user->name = $data->name;
$user->email = $data->email;
$user->password = $data->password;


// update the product
if($user->update()){
    echo "Los datos han sido actualizados.";
}

// if unable to update the product, tell the user
else{
    echo "Imposible Actualizar.";
}