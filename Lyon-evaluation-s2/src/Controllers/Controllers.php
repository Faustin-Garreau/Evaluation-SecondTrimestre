<?php 

namespace Portfolio\Controllers; 
use Portfolio\Validator;

Class Controllers {
    protected $validator;

    function __construct()
    {
        $this->validator = new Validator();
    }
    public function redirect($url)
    {
        header('Location:'.$url);
        exit();
    }   
}