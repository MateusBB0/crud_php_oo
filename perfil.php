<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
use App\Model\User;

if ( isset($_SESSION['update_msg'])) {
   echo  "<span id ='msg'>".$_SESSION['update_msg']. "</span><br>";
}

require("app/Controllers/conexao.php");
require("app/Model/user.php");
require("app/Model/usuarioDao.php");



$user = new User();
$user->getId();
$user->getNome();
$user->getSenha();
$user->getEmail();
$user->getGenero();

foreach ($_SESSION['read'] as $dados) {
   echo "<title>".$dados['nome']."</title>";
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
   echo'
   <div>
<a href="edit.php?id='.$dados['id'].'">Editar</a>
<a href="app/Controllers/logout.php?id='.$dados['id'].' onclick="event.preventDefault(); this.closest("form").submit();">Sair</a>
<a href="app/Controllers/delete.php?id='.$dados['id'].'">Excluir</a>

</div>';

}

?>
<script>
     let x = document.getElementById("msg");
                
                x.style.display = 'block';
                setTimeout(function(){ x.style.display = 'none';}, 3000);
</script>
