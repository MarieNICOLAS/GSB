<?php
namespace GSB;

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
        ob_start();

        $visiteur = new VisiteurController();
        $medecin = new MedecinController();

        switch ($request)
        {
            case '':
            case 'index':
            case 'accueil':
                $title = 'Accueil | GSB';
                require __DIR__ . '/../view/viewAccueil.php';
                break;
        
            case 'inscription-visiteur':
                $title = 'Formulaire d\'Inscription | GSB';
                require __DIR__ . '/../view/visiteurView/inscriptionVisiteur.php';
                break;
            
            case 'traitement-inscription':
                $visiteur->createVisiteurController();
                break;
            
            case 'confirmation-inscription':
                require __DIR__ . '/../view/visiteurView/confirmationInscription.php';
                break;

            case 'connexion':
                require __DIR__ . '/../view/visiteurView/connexionVisiteur.php';
                break;
            
            case 'traitement-connexion':
                $visiteur->threatmentAuthenticate();
                break;
            
            case 'traitement-deconnexion':
                $visiteur->deconnexionVisiteur();
                break;

            case 'monCompte':
                $title = 'Mon Compte | GSB';
                require __DIR__ . '/../view/visiteurView/monCompte.php';
                break;
                
            case 'ajouterMedecin':
                require __DIR__ . '/../view/medecinView/viewAjouterMedecin.php';
            
            case 'traitement-inscription-medecin':
                $medecin->createMedecin();
                break;
                
            case 'liste-medecins':
                $medecin->listMedecin();
                break;
            default:
                $title = 'Error 404 | GSB';
                require __DIR__ . '/../view/viewError404.php';
                break;
        }
        $content = ob_get_clean();
        require __DIR__ . '/../view/components/header/header.php';
        echo $content;
        require __DIR__ . '/../view/components/footer/footer.php';
    }
}