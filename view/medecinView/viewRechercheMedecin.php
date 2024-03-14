<?php $title = "Recherche médecin || GSB";
    use GSB\Model\Medecin;
    $medecins = Medecin::findAll(); 
?>
<form action="/traitement_recherche_medecin" method="post">
    <label for="medecin">Choisir un médecin :</label>
    <input list="medecins" id="medecin" name="medecin-id" placeholder="Tapez pour chercher...">
    <datalist id="medecins">
        <?php foreach ($medecins as $medecin): ?>
                <option value="<?php echo $medecin['id']; ?>">
                    <?php echo $medecin['nom'] . ' ' . $medecin['prenom'];?>
                </option>
        <?php endforeach; ?>
    </datalist>
    <button type="submit">Rechercher</button>
</form>
<form action="/monCompte"><button type="submit">Retour</button></form>