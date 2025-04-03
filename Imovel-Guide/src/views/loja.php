<?php
require '../../vendor/autoload.php';
use src\model\Model;


$result = new Model;
$valor = $result->fetch();
// die();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="../img/casa.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Loja.css">
    <title>Imóvel Guide</title>
</head>
<body>

<div class="titulo">
    <img src="../img/imovel-guide.png" width="100" height="100">
    <h1>Cadastro de Corretor</h1>
</div>

<?php
    session_start();
    if (isset($_SESSION['Usercreate']) == true)
    {
      unset($_SESSION['Usercreate']);
      print_r("<span class='alert alert-success'>Cadastro Realizado com sucesso</span>");
    } else {
      unset($_SESSION['Usercreate']);
    }

    if (isset($_SESSION['Useraltera']) == true)
    {
      unset($_SESSION['Useraltera']);
      print_r("<span class='alert alert-success'>Cadastro Atualizado com sucesso</span>");
    } else {
      unset($_SESSION['Useraltera']);
    }

    if (isset($_SESSION['UserDelete']) == true)
    {
      unset($_SESSION['UserDelete']);
      print_r("<span class='alert alert-success'>Cadastro Excluido com sucesso</span>");
    } else {
      unset($_SESSION['UserDelete']);
    }
  ?>

<hr>
<form action="./create.php" method="post">
        <input type="text" name="cpf" minlength="11" maxlength="11" placeholder="Digite seu CPF" required>
        <input type="password" name="creci" minlength="2" placeholder="Digite seu Creci" required>
        <input type="text" name="nome" minlength="2" placeholder="Digite seu nome" required>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
<hr>

<table class="table">
  <caption><b>List of users</b></caption>
  <thead class="table-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Creci</th>
    </tr>
  </thead>
  <?php foreach($valor as $value): ?>
    <form action="./altera.php" method="post">
      <tbody>
        <tr>
          <th scope="row"><?php echo $value->id?><input type="hidden" name="id" value="<?php echo $value->id?>"></th>
          <td><?php echo $value->nome?><input type="hidden" name="nome" value="<?php echo $value->nome?>"></td>
          <td><?php echo $value->cpf?><input type="hidden" name="cpf" value="<?php echo $value->cpf?>"></td>
          <td><?php echo $value->creci?><input type="hidden" name="creci" value="<?php echo $value->creci?>"></td><td> | <button type="submit" class="btn btn-success">Alterar</button> | <a class="btn btn-danger" href="delete.php?id=<?php echo $value->id; ?>">Excluir</a> | </td>
        </tr>
      </tbody>
    </form>
    <?php endforeach; ?>
  </table>
  


<div id="altor">
<footer>
    <a href="https://github.com/Claitonok"><img src="../img/github_original_wordmark_logo_icon_146506.ico"  width="50" height="50"></a>
</footer>
</div> 


</body>
</html>
