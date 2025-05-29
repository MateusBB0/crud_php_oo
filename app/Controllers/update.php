<?php
session_start();
require_once("conexao.php");
require_once("../Model/usuarioDao.php");
require_once("../Model/user.php");
use App\Model\UserDAO;
use App\Model\User;

if(isset($_POST['submit'])){
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $id = $_SESSION['id'];
    $user = new User(); 
    $user->setNome($nome);
    $user->setSenha($senha);
    $user->setEmail($email);
    $user->setGenero($genero);
    var_dump($user);
    $update = new UserDAO();
    $update->update($user);
    
    // Modificar na página do perfil
    $update->read();
    $_SESSION['read'] = $update->read();
    header('location: ../../perfil.php');
    $_SESSION['update_msg'] = "Dados alterados";
}else{
    echo"erro";
}