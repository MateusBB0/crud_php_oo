<?php
session_start();
require("app/Model/usuarioDao.php");
use App\Model\UserDAO;
$id = $_GET['id'];

$_SESSION['id'] = $id;

?>
<?php foreach($_SESSION['read'] as $dados):?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $dados['nome'] ?> </title>
    <style>
        input[type = text],[type = email], [type = password]{
            display: block;
        }
        input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
        <h1>Editar Dados</h1>
    <form action="app/Controllers/update.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php echo $dados['nome'] ?>">
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $dados['email']?>">
        <label for="">Senha</label>
        <input type="password" name="senha" value="<?php echo $dados['senha'] ?>">
        <label for="">Gênero</label><br>
        <input type="radio" name="genero" id="masculino" value="M" <?php echo $dados['genero'] == "M" ? 'checked' : ''; ?>>Masculino
        <input type="radio" name="genero" id="feminino" value="F" <?php echo $dados['genero'] == "F" ? 'checked' : ''; ?>>Feminino
        <input type="radio" name="genero" id="feminino" value="N" <?php echo $dados['genero'] == "N" ? 'checked' : '';?>>Prefiro não dizer

        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <br>
    <a href="perfil.php?id='".$id."'">Voltar</a>
    <?php endforeach;?>
</body>
</html>