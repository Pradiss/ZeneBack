<?php 

require "models/HomeModel.php";

class HomeController {

    private $url = "http://localhost/integrador/zene";

    private $homeModel;

    public function __construct(){
        $this->homeModel = new Home();

    }

    public function index(){
        $result_user = $this->homeModel->getAll();

        $baseUrl = $this->url;
        require "views/HomeView.php";
    }

}