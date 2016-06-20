<?php
/**
 * Created by PhpStorm.
 * User: carlos.alonso
 * Date: 04/06/2016
 * Time: 14:24
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

// read the details of product to be edited
$user->readOne();

// create array
$user_arr[] = array(
    "id" =>  $user->id,
    "name" => $user->name,
    "email" => $user->email,
    "password" => $user->password
);

// make it json format
print_r(json_encode($user_arr));