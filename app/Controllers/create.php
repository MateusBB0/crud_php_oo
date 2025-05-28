<?php
namespace App\Controllers;
use App\Model\User;
use App\Model\UserDAO;
use Conexao;
session_start();
require_once("conexao.php");
require_once("../Model/user.php");
require_once("../Model/usuarioDao.php");



if (!isset($_POST['submit']) )  {
    echo "ERRO.<br>Os dados não foram resgatados!!";
}else{
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];

    // Dados de sessão
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['senha'] = $senha;
    $_SESSION['email'] = $email;
    $_SESSION['genero'] = $genero;


    // class CRUD extends User{
    //     public function create(User $u) {
    //         $sql = "INSERT INTO usuario(nome, senha, email, genero) VALUES(?, ?, ?, ?)";

    //         $stmt = Conexao::getConn()->prepare($sql);
    //         $stmt->bindValue(1, $u->getNome());
    //         $stmt->bindValue(2, $u->getSenha());
    //         $stmt->bindValue(3, $u->getEmail());
    //         $stmt->bindValue(4, $u->getGenero());

    //         $stmt->execute();

    //     }
    // }




    $newUser = new User();
    $newUser->setNome($nome);
    $newUser->setSenha($senha);
    $newUser->setEmail($email);
    $newUser->setGenero($genero);
    $create = new UserDAO();
    $create->create($newUser);

    $_SESSION['msg'] = "Seus dados foram cadastrados " . $newUser->getNome();
    header("location:../../perfil.php");
}