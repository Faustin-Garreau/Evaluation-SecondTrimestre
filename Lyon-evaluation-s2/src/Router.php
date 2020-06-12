<?php
namespace Portfolio;

class Router {

    private $method;
    private $url;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REQUEST_URI'];
    }

    public function run() {
        $controllerAdmin = new \Portfolio\Controllers\AdminController();
        $controllerHome = new \Portfolio\Controllers\HomeController();
        $ControllerPrincipale = new \Portfolio\Controllers\PrincipalController();
    
        if ($this->url == '/' && $this->method == 'GET') {
            $controllerHome->home();
        } 
        else if ($this->url == '/admin/login' && $this->method == 'GET') {
            $controllerAdmin->showLogin();
        }
        else if ($this->url == '/admin/login' && $this->method == 'POST') {
            $controllerAdmin->login();
        } 
        else if ($this->url == '/admin/home' && $this->method == 'GET') {
            $controllerAdmin->showAdmin();
        }
        else if ($this->url == '/admin/text/edit' && $this->method == 'POST') {
            $controllerAdmin->textUpdate();
        }
        else if ($this->url == '/admin/competences/create' && $this->method == 'POST') {
            $controllerAdmin->competencesCreate();
        }
        else if (preg_match('#^\/admin\/([0-9]+)\/edit$#' ,$this->url, $matches) && $this->method == 'POST') {        
            $controllerAdmin->competencesUpdate($matches[1]);
        }
        else if (preg_match('#^\/admin\/([0-9]+)\/delete$#' ,$this->url, $matches) && $this->method == 'POST') {        
            $controllerAdmin->competencesDelete($matches[1]);
        }
        else if ($this->url == '/admin/projets/create' && $this->method == 'POST') {
            $controllerAdmin->projetsCreate();
        }
        else if (preg_match('#^\/admin\/projets\/([0-9]+)\/edit$#' ,$this->url, $matches) && $this->method == 'POST') {        
            $controllerAdmin->projetsUpdate($matches[1]);
        }
        else if (preg_match('#^\/admin\/projets\/([0-9]+)\/delete$#' ,$this->url, $matches) && $this->method == 'POST') {        
            $controllerAdmin->projetsDelete($matches[1]);
        }
        else if ($this->url == '/contact' && $this->method == 'POST') {
            $controllerHome->contact();
        } 
        else if ($this->url == '/send' && $this->method == 'GET') {
            $controllerHome->send();
        } 
        else if (preg_match('#^\/admin\/contact\/([0-9]+)\/delete$#' ,$this->url, $matches) && $this->method == 'POST') {        
            $controllerAdmin->contactDelete($matches[1]);
        }
        else if (preg_match('#^\/admin\/home\/([0-9]+)\/image$#' ,$this->url, $matches) && $this->method == 'POST') {        
            $controllerAdmin->imageUpdate($matches[1]);
        }
    }
}