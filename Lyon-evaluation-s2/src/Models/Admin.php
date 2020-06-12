<?php 

namespace Portfolio\Models;

class Admin {
    private $username;
    private $password;
    private $id;
    private $admin;
    private $propos;
    private $titre;
    private $link;
    private $email;
    private $message;
    private $image;

    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }

    public function getId(){
        return $this->id;
    }

    public function getAdmin(){
        return $this->admin;
    }

    public function getPropos(){
        return $this->propos;
    }

    public function getCompetences(){
        return $this->titre;
    }

    public function getLink(){
        return $this->link;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getMessage(){
        return $this->message;
    }

    public function getImage(){
        return $this->image;
    }

    public function setUsername($username){
        }

    public function setPassword(String $password){
    }
}