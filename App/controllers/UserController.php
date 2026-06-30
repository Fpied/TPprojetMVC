<?php

require_once __DIR__ . "/../repositories/UserRepository.php";

class UserController{
    public function index(){
        $userRepository = new UserRepository();
        $users = $userRepository->retrieveAllUsers();

        // Charger la vue 
        require_once __DIR__ . "/../views/users.php";
        
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            // Afficher le formulaire
            require_once __DIR__ . "/../views/create_user.php";
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $email = $_POST['email'];

            $userRepository = new UserRepository();
            $userRepository->addUser($nom, $email);
            header('Location: index.php?controller=user&action=index');

            
        }
    }

    public function edit(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];

            $userRepository = new UserRepository();
            $user = $userRepository->retrieveOneUser($id);
            // Afficher le formulaire
            require_once __DIR__ . "/../views/edit_user.php";
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // Récupérer les données du formulaire
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $email = $_POST['email'];

            $userRepository = new UserRepository();
            $userRepository->modifyUser($id, $nom, $email);
            header('Location: index.php?controller=user&action=index');

            
        }
    }

    public function delete(){

        $id = $_GET['id'];

        $userRepository = new UserRepository();
        $userRepository->deleteUser($id);

        // Charger la vue 
        header("Location: index.php?controller=user&action=index");
        
    }

}