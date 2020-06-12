<?php
namespace Portfolio\Models;

class HomeManager {

        private $table = 'contact';
        private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function contactStore()
    {
        $request = $this->pdo->prepare('INSERT INTO ' . $this->table . ' (email, message) VALUES (:email, :message)');
        $request->execute([
            "email" => $_POST["email"],
            "message" => $_POST["message"]
        ]); 
    }
}
