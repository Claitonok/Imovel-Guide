<?php
session_start();
require '../../vendor/autoload.php';

use src\model\Model;


$txtid = strip_tags($_POST["txtid"]);
$txtnome = strip_tags($_POST["txtnome"]);
$txtcpf = strip_tags($_POST["txtcpf"]);
$txtcreci = strip_tags($_POST["txtcreci"]);

echo $txtid , " \n" . $txtnome, " \n" . $txtcpf," \n" . $txtcreci;
    
$model = new Model; 
$model->update($txtid, $txtnome, $txtcpf, $txtcreci);

$Useraltera = true;
$_SESSION['Useraltera'] = $Useraltera;

header("location: loja.php");

?>