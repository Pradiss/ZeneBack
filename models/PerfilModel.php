<?php 

require "DataBase.php";

class Perfil {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }


    public function getAll(){
        $result = $this->db->query("SELECT * FROM usuarios");

        
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getById($idUsuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE idUsuario=?");
        $sql->execute([$idUsuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }


    public function insert($nome,$usuario,$senha){
        $senhaCriptografada = password_hash($senha,PASSWORD_BCRYPT);
        $sql = $this->db->prepare("INSERT INTO usuarios (nome,usuario,senha) VALUES (?,?,?) ");
        $sql->execute([$nome,$usuario,$senhaCriptografada]);

        if($usuario){
            $_SESSION["usuarioNome"] = $usuario;
            return true;
        }
        $_SESSION["erro"] = "Não foi possível acessar o perfil";
        return false;
        
    }

    public function getUsuario($usuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $sql->execute([$usuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);

    }

    
    public function update($nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$telefone,$idInstrumento,$idCategoria,$idBanda,$idSocial){
        $sql = $this->db->prepare("UPDATE usuarios SET nome=?,usuario=?,idade=?,descricao=?,foto=?,email=?,cidade=?,uf=?,telefone=?,idInstrumento=?,idCategoria=?,idBanda=?,idSocial=? WHERE idUsuario=? ");

        return $sql->execute([$nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$telefone,$idInstrumento,$idCategoria,$idBanda,$idSocial]);
    }

}