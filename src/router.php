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
        $rapport = new RapportController();

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
                
            case 'ajouter_medecin':
                require __DIR__ . '/../view/medecinView/viewAjouterMedecin.php';
                break;

            case 'traitement-inscription-medecin':
                $medecin->createMedecin();
                // require __DIR__ . '/../view/medecinView/viewAllMedecin.php';
                break;
                
            case 'liste_medecins':
                $medecin->listMedecin();
                break;
            
            case 'rechercher_medecin':
                require __DIR__ . '/../view/medecinView/viewRechercheMedecin.php';
                break;

            case 'traitement_recherche_medecin':
                $result = $medecin->searchByName();
                require __DIR__ . '/../view/medecinView/viewRechercheMedecin.php';
                break;
            
            case 'informations_medecin':
                
            
            case 'creer_rapport':
                require __DIR__ . '/../view/rapportView/creerRapport.php';
                break;
            
            case 'traitement_ajout_rapport':
                $rapport->createRapport();
                break;
            
            case 'liste_rapport':
                $rapports = $rapport->listRapport();
                require __DIR__ . '/../view/rapportView/liste_rapport.php';
                break;
            
            case 'rechercher_rapport':
                require __DIR__ . '/../view/rapportView/searchRepport.php';
                break;

            case 'traitement_recherche_rapport':
                if (isset($_POST['date_rapport'])) 
                {
                    $date = $_POST['date_rapport'];
                }
                $rapports = $rapport->searchRapportsByDate($date);
                require __DIR__ .  '/../view/rapportView/infoRapport.php';
                break;
            
            case 'modifier_rapport':
                require __DIR__ . '/../view/rapportView/modifierRapport.php';
                break;


            case 'traitement_modification_rapport':
                //$rapport->updateRapport();
                break;
                
            case 'voir_profil':
                require __DIR__ . '/../view/visiteurView/monProfil.php';
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