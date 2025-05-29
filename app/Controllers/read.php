<?php
namespace App\Controllers;

session_start();
require_once("conexao.php");
require_once("../Model/usuarioDao.php");
require_once("../Model/user.php");


if(isset($_POST['submit']) || isset($_GET['id'])){

    $email = isset($_POST['email']) ? $_POST['email'] : $_SESSION['email'];
    $senha = isset($_POST['senha']) ? $_POST['senha'] : $_SESSION['senha'];

// Usar a função read()

$read = new \App\Model\UserDAO();
// Criar uma sessão
$_SESSION['read'] = $read->read(); 

// Área de Dados do Usuário
header('location: ../../perfil.php');

}else{
    header('location: ../../login.php');
    
}