<?php

class SairController{

    private $url = "http://localhost/integrador/zene";

    public function index(){
        session_destroy();

        header("location: " . $this->url . "/login");
    }
}