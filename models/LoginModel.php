<?php 
require "DataBase.php";

class Login{

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getByUsuario($usuario,$senhaDoUsuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $sql->execute([$usuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    
        if($resultado){

            $senhaDoBanco = $resultado["senha"];
            if(password_verify($senhaDoUsuario, $senhaDoBanco)){
                
                $_SESSION["nome_usuario"] = $resultado["nome"];
              
              
                return true;
            }    
           
        }
        $_SESSION["erro"] = "Falha no login";
        return false;
    
    }


}