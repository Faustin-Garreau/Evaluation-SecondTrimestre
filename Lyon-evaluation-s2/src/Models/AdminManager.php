<?php
namespace Portfolio\Models;

class AdminManager {
    private $table = 'user';
    private $tables = 'text';
    private $tabless = 'competences';
    private $tablesss = 'projets';
    private $tablessss = 'contact';
    private $tablesssss = 'url';
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function find($admin){
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $request->execute([
            "username" => $admin
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, 'Portfolio\Models\Admin');
        return $request->fetch();
    }

    public function update($param)
    {
    $request = $this->pdo->prepare('UPDATE ' . $this->tables . ' SET propos = :propos WHERE id = 1');
    $request->execute ([
        "propos" => $param,
    ]);
    }

    public function findText()
    {
    $request = $this->pdo->prepare('SELECT * FROM ' . $this->tables . ' WHERE id = :id');
    $request->execute ([
        "id" => 1
    ]);
    $request->setFetchMode(\PDO::FETCH_CLASS, 'Portfolio\Models\Admin');
    return $request->fetch();
    }

    public function createComp()
    {
        $request = $this->pdo->prepare('INSERT INTO ' . $this->tabless . ' (titre) VALUES (:titre)');
        $request->execute([
            "titre" => $_POST["titre"],
        ]); 
    }

    public function findComp()
    {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tabless . ';');
        $request->execute([
        ]);

        $request->setFetchMode(\PDO::FETCH_CLASS, 'Portfolio\Models\Admin');
        return $request->fetchAll();
    }

    public function updateCompetences($param)
    {
    $request = $this->pdo->prepare('UPDATE ' . $this->tabless . ' SET titre = :titre WHERE id = :id');
    $request->execute ([
        "titre" => $_POST['competences'],
        "id" => $param
    ]);
    }

    public function deleteComp($param)
    {
        $req = $this->pdo->prepare('DELETE FROM ' . $this->tabless . ' WHERE id = :id');
        $req->execute([
            "id" => $param
        ]);
    }

    public function createProj()
    {
        $request = $this->pdo->prepare('INSERT INTO ' . $this->tablesss . ' (titre,link) VALUES (:titre, :link)');
        $request->execute([
            "titre" => $_POST["titre"],
            "link" => $_POST["link"]
        ]); 
    }
    
    public function findProj()
    {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tablesss . ';');
        $request->execute([
        ]);

        $request->setFetchMode(\PDO::FETCH_CLASS, 'Portfolio\Models\Admin');
        return $request->fetchAll();
    }

    public function updateProjet($param)
    {
    $request = $this->pdo->prepare('UPDATE ' . $this->tablesss . ' SET titre = :titre, link = :link  WHERE id = :id');
    $request->execute ([
        "titre" => $_POST['projets'],
        "link" => $_POST['links'],
        "id" => $param
    ]);
    }

    public function deleteProj($param)
    {
        $req = $this->pdo->prepare('DELETE FROM ' . $this->tablesss . ' WHERE id = :id');
        $req->execute([
            "id" => $param
        ]);
    }

    public function findContact()
    {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tablessss . ';');
        $request->execute([
        ]);

        $request->setFetchMode(\PDO::FETCH_CLASS, 'Portfolio\Models\Admin');
        return $request->fetchAll();
    }
    
    public function  deleteCont($param)
    {
        $req = $this->pdo->prepare('DELETE FROM ' . $this->tablessss . ' WHERE id = :id');
        $req->execute([
            "id" => $param
        ]);
    }

    public function findImage()
    {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->tablesssss . ';');
        $request->execute([
        ]);

        $request->setFetchMode(\PDO::FETCH_CLASS, 'Portfolio\Models\Admin');
        return $request->fetch();
    }

    public function updateImg($param)
    {
    $request = $this->pdo->prepare('UPDATE ' . $this->tablesssss . ' SET image = :image WHERE id = :id');
    $request->execute ([
        "image" => $_POST['image'],
        "id" => $param
    ]);
    }
}