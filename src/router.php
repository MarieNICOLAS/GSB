<?php
namespace GSB;

require 'controller/MedecinController.php';
require 'controller/RapportController.php';
require 'controller/VisiteurController.php';

use GSB\Controller\MedecinController;
use GSB\Controller\RapportController;
use GSB\Controller\VisiteurController;
use GSB\Model\Visiteur;

class Router
{
    public function routeRequest()
    {
        $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $request = trim($requestPath, '/');
        
        switch ($request)
        {
            case '':
            case 'index':
            case 'accueil':
                require 'view/viewAccueil.php';
                break;

            case 'inscription-visiteur':
                require 'view/visiteurView/inscriptionVisiteur.php';
                break;
            
            case 'traitement-inscription':
                $visiteur = new VisiteurController();
                $visiteur->createVisiteurController();
                break;
            
            case 'confirmation-inscription':
                require 'view/visiteurView/confirmationInscription.php';
                break;

            case 'connexion':
                require 'view/visiteurView/connexionVisiteur.php';
                break;
            
                case 'traitement-connexion':
                    $visiteur = new VisiteurController();
                    $visiteur->threatmentAuthenticate();
                    break;
            case 'monCompte':
                require 'view/visiteurView/monCompte.php';
                break;
                
            case 'ajouterMedecin':
                require 'view/medecinView/viewAjouterMedecin.php';
            case 'liste-medecins':
                require 'view/medecinView/viewAllMedecin.php';
                break;
            default:
                require 'view/viewError404.php';
                break;
        }
    }
}