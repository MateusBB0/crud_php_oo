<?php
namespace App\Controllers;
use App\Model\User;
use App\Model\UserDAO;

use Conexao;
session_start();
require_once("conexao.php");
require_once("../Model/user.php");
require_once("../Model/usuarioDao.php");
// require_once("../vendor/autoload.php)";


if (!isset($_POST['submit']) )  {
    echo "ERRO.<br>Os dados não foram resgatados!!";
}else{
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];

    // Dados de sessão
    // $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['senha'] = $senha;
    $_SESSION['email'] = $email;
    $_SESSION['genero'] = $genero;


    // Usar a função create

    $newUser = new User();
    $newUser->setNome($nome);
    $newUser->setSenha($senha);
    $newUser->setEmail($email);
    $newUser->setGenero($genero);

    // Criar um novo usuário
    $create = new UserDAO();
    $create->create($newUser);

    // Ler/Selecionar os dados do usuário criado
    $create->read();
    $_SESSION['read'] = $create->read();

   
    $_SESSION['msg'] = "Seus dados foram cadastrados " . $newUser->getNome();
    // Mandar uma mensagem no email ao novo usuário
    include("send_email.php");


    header("location: ../../perfil.php");
}