<?php
namespace Portfolio\Controllers;
use Portfolio\Models\PrincipalManager;
use Portfolio\Validator;

class PrincipalController extends Controllers  {

    function __construct()
    {
        $this->manager = new PrincipalManager(); 
        parent::__construct();
    }
}