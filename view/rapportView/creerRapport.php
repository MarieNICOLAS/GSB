<?php

use GSB\Model\Medecin;
use GSB\Model\Medicament;

$medecins = Medecin::findAll();
$medicaments = Medicament::findAllMedicament();
$title = "Nouveau rapport de visite | GSB"; 
?>
<h1>Nouveau Rapport</h1>
<form action="/traitement_ajout_rapport" method="post">
    <label for="medecin">Médecin:</label>
    <select name="medecin" id="medecin" required>
        <?php foreach ($medecins as $medecin):?>
            <option value="<?php echo $medecin['id']; ?>">
                <?php echo $medecin['nom'] . ' ' . $medecin['prenom'];?>
            </option>
        <?php endforeach;?>
    </select>
    <br>
    <label for="date">Date du rapport:</label>
    <input type="date" name="date_rapport" id="date_rapport" required>
    <br>
    <label for="motif">Motif:</label>
    <input type="textarea" name="motif" id="motif" placeholder="Motif du rapport">
    <br>
    <label for="medicament">Médicament:</label>
    <select name="medicament" id="medicament">
        <?php foreach($medicaments as $medicament):?>
            <option value="<?php echo $medicament['id']; ?>">
                <?php echo $medicament['nomCommercial'];?>
            </option>
        <?php endforeach;?>
    </select>
    <br>
    <label for="bilan">Bilan:</label>
    <input type="textarea" name="bilan" id="bilan" placeholder="Bilan: ">
    <br>
    <button type="submit">Créer un rapport</button>
</form>