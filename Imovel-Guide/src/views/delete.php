<?php
session_start();
require '../../vendor/autoload.php';
use src\model\Model;


$id = strip_tags($_GET["id"]);

$model = new Model;
$model->delete($id); 

$UserDelete = true;
$_SESSION['UserDelete'] = $UserDelete;

header("location: loja.php");


?>