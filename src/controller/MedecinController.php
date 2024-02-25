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

            header('Location: /liste-medecins');
            exit;
        }
    }

    /**
     * Affiche la liste de tous les médecins
     */
    public function listMedecin() {
        $medecins = Medecin::findAll();
        require __DIR__ . '/../../view/medecinView/viewAllMedecin.php';
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
    
    public static function searchByName()
    {
        if (isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            $medecins = Medecin::findByName($nom);
            if ($medecins) {
                foreach($medecins as $medecin) { // Corrigé la variable dans foreach
                    $mail = "<a href='mailto:" . $medecin['email'] . "'>" . $medecin['email'] . "</a>";
                    echo "<li>";
                    echo "<strong>Nom: </strong>" . $medecin['nom'] . "<br>";
                    echo "<strong>Prenom:</strong>" . $medecin['prenom'] . "<br>";
                    echo "<strong>Téléphone:</strong>" . $medecin['telephone'] . "<br>";
                    echo "<strong>Adresse:</strong>" . $medecin['adresse'] . "<br>";
                    echo "<strong>Email:</strong>" . $mail. "<br>";
                    echo "<strong>Spécialité:</strong>" . $medecin['specialiteComplementaire'] . "<br>";
                    echo "<strong>Départemnt:</strong>" . $medecin['departement'] . "<br>";
                    echo "</li>";
                }
                return $medecin;
            } 
            return [];
        } 
    }
    
}