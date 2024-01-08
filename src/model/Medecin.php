<?php
namespace GSB\Model;
use GSB\Config;
use PDO;

class Medecin{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $telephone;
    private $email;

    private $specialiteComplementaire;

    private $departement;
    private $pdo;

    /**
     * Constructeur Médecin 
     * @param string $name
     * @param string $prenom
     * 
     */
    public function __construct($nom, $prenom, $adresse, $telephone, $email, $specialiteComplementaire, $departement){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->telephone =$telephone;
        $this->email = $email;
        $this->specialiteComplementaire = $specialiteComplementaire;
        $this->departement = $departement;
        $this->pdo = Config::getInstance()->getConnection();
    }

    /**
     * Function insérer un médecin dans la table 'medecin'  
     */
    public function createMedecin(){
        $sql = "INSERT INTO medecin (nom, prenom, adresse, telephone, email, specialiteComplementaire, departement) 
                VALUES (:nom, :prenom, :adresse, :telephone, :email, :specialiteComplementaire, :departement)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'adresse' => $this->adresse,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'specialiteComplementaire' => $this->specialiteComplementaire,
            'departement' => $this->departement
        ]);
    }

    /**
     * Fonction pour retrouver tous les médecins
     * @return array($tousLesMedecins)
     */

    public static function findAll()
    {
        $pdo = Config::getInstance()->getConnection();
        $sql = "SELECT * FROM medecin";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
      * Fonction pour retrouver les médecins par leur id
      * @return array($idMedecin)
      */
    public function findById($id)
    {
        $sql = "SELECT * FROM medecin WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Fonction pour retrouver tous les médecins
     * @return array($nameMedecin)
     */

    public function findByName($name)
    {
        $sql = "SELECT * FROM medecin WHERE nom = :nom";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['nom' => $name]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateMedecin($id, Medecin $medecin)
    {

    }

    public function deleteMedecin($id)
    {

    }




}