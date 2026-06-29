<?php

class User{
    private int $id;
    private string $nom;
    private string $email;

    public function getId(){
        return $this->id;

    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }

    public function getEmail(){
        return $this->email;

    }

    public function setEmail(string $email){
        $this->email = $email;
    }


}