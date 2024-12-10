<?php 

require "models/LoginModel.php";

class LoginController {

    private $url = "http://localhost/integrador/zene";

    private $loginModel;

    public function __construct(){
        $this->loginModel = new Login();
    }

    public function index(){
        
        $baseUrl = $this->url;
        $erro = "";
        require "views/LoginForm.php";
    }

    public function criar(){

    $this->loginModel->insert($nome,$usuario,$senha);
    }

    
    public function autenticar(){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $this->loginModel->getByUsuario($usuario,$senha);

        if(isset($_SESSION["erro"])){

            unset($_SESSION["erro"]);

            $erro = "<div class='alert alert-danger'> Não foi possível efeituar o login. Tente novamente </div>";

            $baseUrl = $this->url;

            require "views/LoginForm.php";
        }else{

            header("location: " . $this->url . "/home" );
            unset($_SESSION["usuarioNome"]);
        }
    }


    
}