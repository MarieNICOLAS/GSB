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
    }

    /**
     * Function insérer un médecin dans la table 'medecin'  
     */
    public function createMedecin(){
        $pdo = \GSB\Main::getPDO();
        $sql = "INSERT INTO medecin (nom, prenom, adresse, telephone, email, specialiteComplementaire, departement) 
                VALUES (:nom, :prenom, :adresse, :telephone, :email, :specialiteComplementaire, :departement)";
        $stmt = $pdo->prepare($sql);
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
     * @return array($listMedecins)
     */

    public static function findAll()
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM medecin";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
      * Fonction pour retrouver les médecins par leur id
      * @return array($idMedecin)
      */
    public static function findById($id)
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM medecin WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getMedecinName($id)
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT nom FROM medecin WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchColumn();
    }

    /**
     * Fonction pour retrouver tous les médecins
     * 
     */

    public static function findByName($nom)
    {
        $pdo = \GSB\Main::getPDO();
        $nom = "%".$nom."%"; // Préparer le motif de recherche
        $sql = "SELECT * FROM medecin WHERE nom LIKE ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $nom); // 's' spécifie que le paramètre est une chaîne
        $stmt->execute();
        $medecins = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($medecins) {
            return $medecins;
        } else {
            return null ;
        }
    }

    public function updateMedecin($medecin_id)
    {

    }

    public function deleteMedecin($medecin_id)
    {

    }

    public static function findBySearchTerm($term)
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM medecin WHERE nom LIKE :term OR prenom LIKE :term";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['term' => '%' . $term . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




}