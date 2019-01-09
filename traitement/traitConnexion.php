<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $req = $pdo -> prepare('SELECT id, password FROM user WHERE username = ?');
    $req -> execute(array($username));
    $resultat = $req -> fetch();

    $isPasswordCorrect = password_verify($password, $resultat['password']);

    if (!$resultat){
        echo 'Mauvais identifiant ou mot de passe !';
    }elseif($isPasswordCorrect == FALSE){
        echo 'Mauvais identifiant ou mot de passe !';
    }else{
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['username'] = $username;
        header('location: ../equigest/index.php?action=acceuil');
        exit;
    }
}