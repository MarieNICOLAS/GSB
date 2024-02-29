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
        if ($_SERVER['REQUEST_METHOD'] === 'POST')

        $date = $_POST['date_rapport'];
        $motif = $_POST['motif'];
        $bilan = $_POST['bilan'];
        $idVisiteur = $_SESSION['user_id'];
        $idMedecin = $_POST['idMedecin'];

        $rapport = new Rapport($date, $motif, $bilan, $idVisiteur, $idMedecin);
        $rapport->createRapport();

        header('Location: /liste_rapports');
        exit;

    }

    public function listRapport()
    {
        return Rapport::findAll();
    }

    public function viewRapport($id)
    {
        return Rapport::findByID($id);
    }

    public function updateRapport($id, $newData)
    {
        return Rapport::updateRapport($id, $newData);
    }

    public function deleteRapport($id)
    {
        return Rapport::deleteRapport($id);
    }

    public function searchRapportsByDate($date)
    {
        
    }

    public function ddMedicamentToRapport($rapportId, $medicamentId, $quantity)
    {

    }

    
}