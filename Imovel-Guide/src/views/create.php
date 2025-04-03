<?php
session_start();
require '../../vendor/autoload.php';

use src\model\Model;


$nome = strip_tags($_POST["nome"]);
$cpf = strip_tags($_POST["cpf"]);
$creci = strip_tags($_POST["creci"]);

$model = new Model; 
$model->create($nome, $cpf, $creci);

$Usercreate = true;
$_SESSION['Usercreate'] = $Usercreate;

header("location: loja.php");

?>
