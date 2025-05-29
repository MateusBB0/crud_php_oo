<?php
namespace App\Model;
require_once("user.php");
use Conexao;
use App\Model\User;

class UserDAO extends User{
      public function create(User $u) {
            $sql = "INSERT INTO usuario(nome, senha, email, genero) VALUES(?, ?, ?, ?)";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $u->getNome());
            $stmt->bindValue(2, $u->getSenha());
            $stmt->bindValue(3, $u->getEmail());
            $stmt->bindValue(4, $u->getGenero());

            $stmt->execute();
      }

      public function read() {
            global $email, $senha;
            $sql = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                    // Transformar os dados numa array
                    $result =  $stmt->fetchAll(\PDO::FETCH_ASSOC);
                    return $result;
                    
            }else{
                header("location: ../../login.php");
            }
            
    }

    public function update(User $u) {
        global $id;
        $sql = "UPDATE  usuario SET nome = ?, senha = ?, email = ?, genero = ? WHERE id = '".$id."' ";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getNome());
        $stmt->bindValue(2, $u->getSenha());
        $stmt->bindValue(3, $u->getEmail());
        $stmt->bindValue(4, $u->getGenero());
        // $stmt->bindValue(5, $u->getId());

        $stmt->execute();

    }

    public function Delete($id){
        $sql = "DELETE FROM usuario WHERE id = ? ";

    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    header('location: ../../index.php');
    }

    public function Logout($id){
        unset($id);
        session_destroy();
        header('location: ../../login.php');
    }
}