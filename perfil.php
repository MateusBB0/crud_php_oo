<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
use App\Model\User;


require("app/Controllers/conexao.php");
require("app/Model/user.php");
require("app/Model/usuarioDao.php");



$user = new User();
$user->getId();
$user->getNome();
$user->getSenha();
$user->getEmail();
$user->getGenero();

// $dados_user = new \App\Model\UserDAO();
// $dados_user->read();

foreach ($_SESSION['read'] as $dados) {
   echo $dados['id'] . "<br>";
   echo $dados['nome'] . "<br>";
   echo $dados['senha'] . "<br>";
   echo $dados['email'] . "<br>";

   if ($dados['genero'] == "M") {
     echo"Masculino";
   }elseif($dados['genero'] == "F"){
      echo "Feminino";
   }else{
      echo "Indefinido";
   }
   echo'<div>
<a href="logout.php?id='.$dados['id'].' onclick="event.preventDefault(); this.closest("form").submit();">Sair</a>
<a href="delete.php?id='.$dados['id'].'">Excluir</a>

</div>';

}

?>
