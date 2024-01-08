<?php
namespace GSB\Controller;
use GSB\Model\Medecin;


class MedecinController{

    /**
     * Fonction qui récupère les données saisies 
     * dans le formulaire de création/ajout du medecin (à partir de la view viewAjouterMedecin.php)
     * Appel la fonction createMedecin() du model Medecin qui va creer et insérer le nouveau médecin
     * dans la table 'medecin'
     */
    public function createMedecin()
    {   
        if ($_SERVER['REQUEST_METHOD']=== 'POST')
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $specialiteComplementaire = $_POST['specialiteComplementaire'];
            $departement = $_POST['departement'];

            $medecin = new Medecin($nom, $prenom, $adresse, $telephone, $email, $specialiteComplementaire, $departement);
            $medecin->createMedecin();

            header('Location: viewAllMedecin.php');
            exit;
        }

        require __DIR__ . '../../view/medecinView/viewAjouterMedecin.php';
    }

    /**
     * Affiche la liste de tous les médecins
     */
    public function listMedecin() {
        $medecins = Medecin::findAll();
        require __DIR__ . '../../view/medecinView/viewAllMedecin.php'; // Chemin vers la vue de la liste des médecins
    }

    public function viewMedecin($id)
    {

    }

    public function updateMedecin($id)
    {

    }

    public function deleteMedecin($id)
    {

    }

    public function listRapportsByMedecin($id)
    {

    }
}