<?php
/**
 * Created by PhpStorm.
 * User: carlos.alonso
 * Date: 04/06/2016
 * Time: 13:41
 */

// get database connection
include_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();

// instantiate product object
include_once '../classes/user.php';
$user = new User($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));

// set product property values
$user->name = $data->name;
$user->email = $data->email;
$user->password = $data->password;
$user->created = date('Y-m-d H:i:s');

// create the product
if($user->create()){
    echo "Product was created.";
}

// if unable to create the product, tell the user
else{
    echo "Unable to create product.";
}