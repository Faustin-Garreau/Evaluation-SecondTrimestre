<?php
namespace Portfolio\Controllers;
use Portfolio\Models\AdminManager;
use Portfolio\Validator;

class AdminController extends Controllers  {
    
    function __construct()
    {
        $this->manager = new AdminManager(); 
        parent::__construct();
    }

    public function showLogin() {
        require VIEW .'login.php';
    }

    public function login()
    {
        $this->validator->validate([
            'username' => ['required', 'alpha', 'min:2'],
            'password' => ['required', 'alphaNumDash', 'min:6']
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $_SESSION["old"] = $_POST;
        }

        $admin = $this->manager->find($_POST["username"]);

        if (!$admin || $admin && $_POST["password"] != $admin->getPassword()) {
            $_SESSION["errors"]["password"] = "Les identifiant ne sont pas bon";
        }

        if ($_SESSION["errors"] == []) {
            $_SESSION["user"] = $admin;
            if ($admin->getAdmin()) {
                $this->redirect('/admin/home');
            }
        }
        $this->redirect('/admin/login');
    }

    public function showAdmin() {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $propos = $this->manager->findText();
        $competences = $this->manager->findComp();
        $projets = $this->manager->findProj();
        $contacts = $this->manager->findContact();
        $images = $this->manager->findImage();
        require VIEW .'HomeAdmin.php';
    }

    public function textUpdate() {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->validator->validate([
            'propos' => ['required'],
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/admin/home');
        }

        $this->manager->update($_POST['propos']);
        $this->redirect('/admin/home');
    }

    public function competencesCreate()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->validator->validate([
            'titre' => ['required'],
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/admin/home');
        }

        $this->manager->createComp();
        $this->redirect('/admin/home');
    }

    public function competencesUpdate($id) {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->validator->validate([
            'competences' => ['required'],
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/admin/home');
        }

        $this->manager->updateCompetences($id);
        $this->redirect('/admin/home#comp');
    }

    public function competencesDelete($id)
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->manager->deleteComp($id);
        $this->redirect('/admin/home#comp');
    }

    public function projetsCreate()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->validator->validate([
            'titre' => ['required'],
            'link' => ['required']
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/admin/home');
        }

        $this->manager->createProj();
        $this->redirect('/admin/home#proj');
    }

    public function projetsUpdate($id) {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->validator->validate([
            'projets' => ['required'],
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/admin/home');
        }

        $this->manager->updateProjet($id);
        $this->redirect('/admin/home#proj');
    }

    public function projetsDelete($id)
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->manager->deleteProj($id);
        $this->redirect('/admin/home#proj');
    }

    public function contactDelete($id)
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->manager->deleteCont($id);
        $this->redirect('/admin/home');
    }

    public function imageUpdate($id) {
        if (!isset($_SESSION['user'])) {
            $this->redirect('/');
        }
        $this->validator->validate([
            'image' => ['required'],
        ]);

        if ($this->validator->errors()) {
            $_SESSION["errors"] = $this->validator->errors();
            $this->redirect('/admin/home');
        }

        $this->manager->updateImg($id);
        $this->redirect('/admin/home');
    }
    
}
