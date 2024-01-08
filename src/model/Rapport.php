<?php
namespace GSB\Model;
class Rapport{
    private $id;
    private $date;
    private $motif;
    private $bilan;
    private $idVisiteur;
    private $idMedecin;

    /**
     * Constructeur Rapport
     */
    public function __construct($date, $motif, $bilan, $idVisiteur, $idMedecin)
    {
        $this->date = $date;
        $this->motif = $motif;
        $this->bilan = $bilan;
        $this->idVisiteur = $idVisiteur;
        $this->idMedecin = $idMedecin;
    }

    public function createRapport()
    {

    }

    public function findAll()
    {

    }

    public function findByDate($date)
    {

    }

    public function findByMedecin($nameMedecin)
    {

    }

    public function updateRapport($id, Rapport $rapport)
    {

    }

    public function deleteRapport($id)
    {
        
    }
}