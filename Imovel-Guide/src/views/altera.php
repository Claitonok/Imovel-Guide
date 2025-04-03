<?php
session_start();
require '../../vendor/autoload.php';

use src\model\Model;

$id = strip_tags($_POST["id"]);
$nome = strip_tags($_POST["nome"]);
$cpf = strip_tags($_POST["cpf"]);
$creci = strip_tags($_POST["creci"]);

// die();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="../img/casa.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alteraUse.css">
    <title>Imóvel Guide</title>
</head>
<body>

<div class="user">
    <h6><b>Bem vindo | <?php echo $nome?></b></h6>
</div>

<div class="titulo">
    <img src="../img/imovel-guide.png" width="100" height="100">
    <h1>Alterando Dados Corretor</h1>
</div>

<hr>
<form action="./UserAltera.php" method="post">
        <input type="hidden" name="txtid" value="<?php echo $id ?>">
        <b>CPF: </b><input type="text" name="txtcpf" value="<?php echo $cpf ?>" minlength="11" maxlength="11" placeholder="Digite seu novo CPF" required>
        <b>Creci: </b><input type="password" name="txtcreci" value="<?php echo $creci ?>" minlength="2" placeholder="Digite seu novo Creci" required>
        <b>Nome: </b><input type="text" name="txtnome" value="<?php echo $nome ?>" minlength="2" placeholder="Digite seu novo Nome" required>
       | <button type="submit" class="btn btn-success">Salvar</button> | <a class="btn btn-success" href="./loja.php">Inicio</a> |
    </form>
<hr>

</body>
</html>
