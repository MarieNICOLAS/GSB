<!-- Formulaire de recherche de médecin -->
<?php

use GSB\Model\Medecin;

$medecins = Medecin::findAll();
$title = "Recherche médecin || GSB";?>

<label for="medecin-input">Choisir un médecin :</label>
<input list="medecin-list" id="medecin-input" name="medecin" />
<datalist id="medecin-list">
    <?php foreach ($medecins as $medecin):?>
        <option value="<?php echo $medecin['nom'] . ' ' . $medecin['prenom']; ?>">
            <?php echo htmlspecialchars($medecin['nom'] . ' ' . $medecin['prenom']);?>
        </option>
    <?php endforeach;?>
</datalist>
<form action="informations_medecin"></form><button type="submit">Rechercher</button>