<?php

if(isset($_POST['nom'])
    && isset($_POST['prenom'])
    && isset($_POST['username'])
    && isset($_POST['password'])
    && isset($_POST['confirmPassword'])
    && isset($_POST['mail'])
    && isset($_POST['confirmMail'])
    && isset($_POST['ecurie'])
    && isset($_POST['adresse'])
    && isset($_POST['codePostal'])
    && isset($_POST['ville'])
    && isset($_POST['situation'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $mail = $_POST['mail'];
        $confirmMail = $_POST['confirmMail'];
        $ecurie = $_POST['ecurie'];
        $adresse = $_POST['adresse'];
        $codePostal = $_POST['codePostal'];
        $ville = $_POST['ville'];
        $situation = $_POST['situation'];

        $req = $pdo -> prepare("SELECT * FROM user WHERE username=?");
        $req -> execute(array($username));

        $retour = '<a href="../equigest/index.php?action=inscription">Retourner en arriére</a>';
        if($username == $req -> fetch()){
            echo ("Ce nom d'utilisateur est deja pris, veuillez en choisir un autre. ".$retour);
        }elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            echo("Votre email est incorrect. ".$retour);
        }elseif($password != $confirmPassword){
            echo("Vos mots de passe sont differents. ".$retour);
        }elseif($mail != $confirmMail){
            echo("Vos emails sont differents. ".$retour);
        }else{

            $passHash = password_hash($password, PASSWORD_DEFAULT);

            $req = $pdo -> prepare("INSERT INTO user (nom,prenom,username,password,mail) VALUE (?,?,?,?,?)");
            $req -> execute(array($nom,$prenom,$username,$passHash,$mail));

            $idProprietaire = $pdo -> lastInsertId();

            $req = $pdo -> prepare("INSERT INTO ecurie (nom,adresse,codePostal,ville,situation,idProprietaire) VALUE (?,?,?,?,?,?)");
            $req -> execute(array($ecurie,$adresse,$codePostal,$ville,$situation,$idProprietaire));

            $_SESSION['id'] = $idProprietaire;
            $_SESSION['username'] = $username;
            header('location: ../equigest/index.php?action=acceuil');
            exit;
        }



    }else{
        echo("Vous n'avez pas rempli tout les champs. ".$retour);
    }

?>