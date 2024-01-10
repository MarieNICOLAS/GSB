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
        switch ($request)
        {
            case '':
            case 'index':
            case 'accueil':
                require __DIR__ . '/../view/viewAccueil.php';
                break;
        
            case 'inscription-visiteur':
                $title = 'Formulaire d\'Inscription';
                require __DIR__ . '/../view/visiteurView/inscriptionVisiteur.php';
                break;
            
            case 'traitement-inscription':
                $visiteur = new VisiteurController();
                $visiteur->createVisiteurController();
                break;
            
            case 'confirmation-inscription':
                require __DIR__ . '/../view/visiteurView/confirmationInscription.php';
                break;

            case 'connexion':
                require __DIR__ . '/../view/visiteurView/connexionVisiteur.php';
                break;
            
            case 'traitement-connexion':
                $visiteur = new VisiteurController();
                $visiteur->threatmentAuthenticate();
                break;
            case 'monCompte':
                require __DIR__ . '/../view/visiteurView/monCompte.php';
                break;
                
            case 'ajouterMedecin':
                require __DIR__ . '/../view/medecinView/viewAjouterMedecin.php';
            case 'liste-medecins':
                require __DIR__ . '/../view/medecinView/viewAllMedecin.php';
                break;
            default:
                require __DIR__ . '/../view/viewError404.php';
                break;
        }
        $content = ob_get_clean();
        require __DIR__ . '/../view/components/header/header.php';
        echo $content;
        require __DIR__ . '/../view/components/footer/footer.php';
    }
}