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
    
    public function __construct()
    {
        

    }

    public function createRapport($date, $motif, $bilan, $idVisiteur, $idMedecin)
    {
        $rapport = new Rapport($date, $motif, $bilan, $idVisiteur, $idMedecin);
    }

    public function listRapport()
    {

    }

    public function viewRapport($id)
    {

    }

    public function updateRapport($id)
    {

    }

    public function deleteRapport($id)
    {
        
    }

    public function searchRapportsByDate($date)
    {

    }

    public function ddMedicamentToRapport($rapportId, $medicamentId, $quantity)
    {

    }

    
}