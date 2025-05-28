<?php
namespace App\Controllers;

session_start();
require_once("conexao.php");
require_once("../Model/usuarioDao.php");
require_once("../Model/user.php");


if(isset($_POST['submit']) || isset($_GET['id'])){

    $email = isset($_POST['email']) ? $_POST['email'] : $_SESSION['email'];
    $senha = isset($_POST['senha']) ? $_POST['senha'] : $_SESSION['senha'];

//     class Read extends User{
//         public function read() {
//             global $email, $senha;
//             $sql = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";

//             $stmt = Conexao::getConn()->prepare($sql);
//             $stmt->execute();
//             if($stmt->rowCount() > 0){
//                     // Transformar os dados numa array
//                     $result =  $stmt->fetchAll(\PDO::FETCH_ASSOC);
//                     return $result;
                    
//             }else{
//                 echo "erro";
//             }
//     }
//     public function Delete($id){
//         $sql = "DELETE * FROM usuario WHERE id = ? ";

//     $stmt = Conexao::getConn()->prepare($sql);
//     $stmt->bindValue(1, $id);
//     $stmt->execute();
//     header('location: ../../index.php');
//     }

//  }

// Área de Dados do Usuário
// include("../../perfil.php");
$read = new \App\Model\UserDAO();
$_SESSION['read'] = $read->read(); 
header('location: ../../perfil.php');

}else{
    // header('location: ../../login.php');
    // $_SESSION['error_msg'] = "Email ou Senha Inválido";
}