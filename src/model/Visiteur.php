<?php
namespace GSB\Model;

use GSB\Config;



class Visiteur{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $telephone;
    private $login;
    private $motDePasse;
    
    private $codePostal;

    private $ville;

    private $dateEmbauche;

    /**
     * Constructeur Visiteur 
     * @param string $nom, $prenom, $adresse, $telephone, $login, $motDePasse, $codePostal, $ville, $dateEmbauche
     * 
     * 
     */
    public function __construct($nom, $prenom, $adresse, $telephone, $login, $motDePasse, $codePostal, $ville, $dateEmbauche){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->telephone =$telephone;
        $this->login = $login;
        $this->motDePasse = $motDePasse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->dateEmbauche = $dateEmbauche;
    }

    /**
     * Fonction création visiteur
     */
    public function createVisiteur(){
        $pdo = Config::getInstance()->getConnection();
        $sql = "INSERT INTO visiteur (nom, prenom, adresse, telephone, login, motDePasse, codePostal, ville, dateEmbauche) VALUES (:nom, :prenom, :adresse, :telephone, :login, :motDePasse, :codePostal, :ville, :dateEmbauche)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':adresse', $this->adresse);
        $stmt->bindParam(':telephone', $this->telephone);
        $stmt->bindParam(':login', $this->login);
        $stmt->bindParam(':motDePasse', $this->motDePasse);
        $stmt->bindParam(':codePostal', $this->codePostal);
        $stmt->bindParam(':ville', $this->ville);
        $stmt->bindParam(':dateEmbauche', $this->dateEmbauche);

        $stmt->execute();
    }

    /**
     * Fonction pour l'authentification du visiteur lors de sa connexion à son compte
     */
    public static function authenticate(String $login, String $motDePasse)
    {
        $pdo = Config::getInstance()->getConnection();
        
        $sql = "SELECT login, motDePasse FROM visiteur WHERE login = :login AND motDePasse = :motDePasse";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':motDePasse', $motDePasse);

        $stmt->execute();

        if ($stmt->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public static function logout()
    {
        if (session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }

        $_SESSION = array();

        session_destroy();
    }
}
?>