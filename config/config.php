<?php
namespace GSB;
/**
 * Classe Singleton Config gestion de la configuration de la connexion à la bdd "gestion_visite_db"
 * @return $pdo
 * @return $instance
 */
class Config 
{
    private static $instance = null;
    private $pdo;
    
    private function __construct()
    {
        $this->pdo = new \PDO("mysql:host=localhost; dbname=gestion_visite_db", "root", "");
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Fonction pour obtenir l'instance Singleton
     * @return $instance
     */
    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    /**
     * Retourne Objet PDO sur lequel on pourra faire les opérations de BDD
     * @return $pdo
     */
    public function getConnection(){
        return $this->pdo;
    }
}

?>
