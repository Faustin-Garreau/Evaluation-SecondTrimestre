<?php
namespace Portfolio\Controllers; 
use Portfolio\Models\HomeManager;
use Portfolio\Models\AdminManager;
use Portfolio\Validator;

Class HomeController extends Controllers{
    private $manager;
    function __construct() {
        $this->managers = new AdminManager();
        $this->manager = new HomeManager();
        parent::__construct();
    }

    public function home()
    {
        $competences = $this->managers->findComp();
        $propos = $this->managers->findText();
        $projets = $this->managers->findProj();
        $images = $this->managers->findImage();
        require VIEW.'home.php';
    }

    public function contact() 
    {
        $this->validator->validate([
            'email' => ['required', 'email'],
            'message' => ['required', 'alphaNumDash']
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/');
        }

        $this->manager->contactStore();
        $this->redirect('/send');
    }

    public function send()
    {
        require VIEW.'send.php';
    }

}
