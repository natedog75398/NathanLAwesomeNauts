<?php
require_once(__DIR__. "/database.php");
session_start();  

session_regenerate_id(true);

$path = "/NathanLopez-blog/";
   //path
$host = "localhost";

$username = "root";
//username
$password = "root";
//password
$database = "blog_db";
///database
if(!isset($_SESSION["connection"])){
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}
// config-db