<?php
namespace GSB\Controller;

use GSB\Model\Rapport;

class RapportController
{
    private $id;
    private $date;
    private $motif;
    private $bilan;
    private $idVisiteur;
    private $idMedecin;

    
    public function createRapport()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date_rapport'];
            $motif = $_POST['motif'];
            $bilan = $_POST['bilan'];
            $idVisiteur = $_SESSION['user_id'];
            $idMedecin = $_POST['medecin'];

            $rapport = new Rapport($date, $motif, $bilan, $idVisiteur, $idMedecin);
            $rapport->createRapport();

            header('Location: /liste_rapport');
            exit;
        }
    }

    public function searchRapportsByDate($date) {
        return Rapport::findByDate($date);
    }

    
    public function listRapport()
    {
        return Rapport::findAll();
    }

    public function viewRapport($id)
    {
        return Rapport::findByID($id);
    }

    public function getRapportById($id) {
        return Rapport::findById($id);
    }

    public function updateRapport() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $date = $_POST['date'];
            $motif = $_POST['motif'];
            $bilan = $_POST['bilan'];
            $idMedecin = $_POST['idMedecin'];
            $idVisiteur = $_POST['idVisiteur'];

            Rapport::updateRapport($id, $date, $motif, $bilan, $idMedecin, $idVisiteur);

            header('Location: /liste_rapport');
            exit;
        }
    }
    public function deleteRapport($id)
    {
        return Rapport::deleteRapport($id);
    }

}