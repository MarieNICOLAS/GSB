<?php
namespace GSB\Model;

use PDO;

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
        $pdo = \GSB\Main::getPDO();
        $sql = "INSERT INTO rapport (date, motif, bilan, idVisiteur, idMedecin) VALUES (:date, :motif, :bilan, :idVisiteur, :idMedecin)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':motif', $this->motif);
        $stmt->bindParam(':bilan', $this->bilan);

        $idVisiteur = $_SESSION['user_id'];
        $stmt->bindParam(':idVisiteur', $idVisiteur);
        $stmt->bindParam(':idMedecin', $this->idMedecin);
        $stmt->execute();
    }

    public function setIdVisiteur($idVisiteur)
    {
        $this->idVisiteur = $idVisiteur;
    }

    public static function findAll()
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM rapport";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findByID($id)
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM rapport WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function findByDate($date)
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM rapport WHERE date = :date";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':date', $date);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function updateRapport($id, Rapport $rapport)
    {

    }

    public static function deleteRapport($id)
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "DELETE FROM rapport WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}