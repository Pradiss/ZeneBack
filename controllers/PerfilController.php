<?php 


require "models/PerfilModel.php";


class PerfilController{

    private $url = "http://localhost/integrador/zene";

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new Perfil();
    }

    public function index(){
        $sessao = $_SESSION["idUsuario"];
        $result_perfil = $this->usuarioModel->getById($sessao);
    
        $baseUrl = $this->url;

        require "views/PerfilView.php";
    }

    public function criar(){

        $baseUrl = $this->url;
        $acao = "criar";

        require "views/PerfilForm.php";
        
    }
    public function atualizar(){
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];


        $acao = $_POST["acao"];

        if($acao == "editar"){
            $idUsuario = $_POST["idUsuario"];
            $this->usuarioModel->update($idUsuario,$senha,$usuario);
        }else{

            $this->usuarioModel->insert($nome,$usuario,$senha);
        }
        

        header("location: " . $this->url. "/home");
    }

    public function editar($idUsuario){
        $result_perfil = $this->usuarioModel->getById($idUsuario);
        $nome = $result_perfil["nome"];
        $descricao = $result_perfil["descricao"];
        $usuario = $result_perfil["usuario"];
        $idBanda = $result_perfil["idBanda"];
        $email =$result_perfil["email"];
        $telefone = $result_perfil["telefone"];
        $cidade =$result_perfil["cidade"];
        $idInstrumento = $result_perfil["idInstrumento"];
        $idCategoria = $result_perfil["idCategoria"];
        $foto = $result_perfil["foto"];
        $idade = $result_perfil["idade"];

        
        
        $baseUrl = $this->url;
        $acao = "editar";
        require "views/PerfilEditar.php";
    }


   
}