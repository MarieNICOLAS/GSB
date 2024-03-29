<?php

namespace GSB\Controller;
use GSB\Model\Visiteur;


class VisiteurController{
    
    public function createVisiteurController()
    {
        if ($_SERVER['REQUEST_METHOD']==='POST')
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $telephone = $_POST['telephone'];
            $login = $_POST['login'];
            $motDePasse = $_POST['motDePasse'];
            $codePostal = $_POST['codePostal'];
            $ville = $_POST['ville'];
            $dateEmbauche = $_POST['dateEmbauche'];

            $visiteur = new Visiteur($nom, $prenom, $adresse, $telephone, $login, $motDePasse, $codePostal, $ville, $dateEmbauche);
            $visiteur->createVisiteur();
            header('Location: /confirmation-inscription');
            exit;
        }
    }

    public function threatmentAuthenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $login = $_POST['login'] ?? '';
            $motDePasse = $_POST['motDePasse'];

            if (Visiteur::authenticate($login, $motDePasse))
            {
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_login'] = $login;
                header('Location: /monCompte');
                exit;
            }
            else
            {
                header('Location: /connexion');
                exit;
            }
        }
    }

    public function deconnexionVisiteur()
    {
        Visiteur::logout();
        header('Location: /accueil');
        exit;
    }



}