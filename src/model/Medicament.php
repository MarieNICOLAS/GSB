<?php
namespace GSB\Model;

class Medicament
{
    private $id;
    private $nomCommercial;
    private $idFamille;
    private $composition;
    private $effets;
    private $contreIndications;

    public function __construct($nomCommercial, $idFamille, $composition, $effets, $contreIndications)
    {
        $this->nomCommercial = $nomCommercial;
        $this->idFamille = $idFamille;
        $this->composition = $composition;
        $this->effets = $effets;
        $this->contreIndications = $contreIndications;
    }

    public static function findAllMedicament()
    {
        $pdo = \GSB\Main::getPDO();
        $sql = "SELECT * FROM medicament";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}