<?php

require_once __DIR__ . '/../config/Database.php';




class UserRepository{

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo= Database::getConnexion();
    }


    function retrieveAllUsers(){
    $sql = "SELECT * FROM users";
    $stmt = $this->pdo->query($sql);
    $lignes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $lignes;

    }

    function retrieveOneUSer(int $id){
        $sql = "SELECT * FROM users WHERE id= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $lignes = $stmt->fetch(PDO::FETCH_ASSOC);
        return $lignes;
    }

    function addUser(string $nom, string $email){
        $sql = "INSERT INTO users (nom, email) VALUES (:nom, :email)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':nom' => $nom, ':email' => $email]);
        
    }

    function modifyUser(int $id, string $nom,string $email){
        $sql = "UPDATE users SET nom = :nom, email = :email WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id ,':nom' => $nom, ':email' => $email]);
        


    }

    function deleteUser(int $id){
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
        



    }

}
