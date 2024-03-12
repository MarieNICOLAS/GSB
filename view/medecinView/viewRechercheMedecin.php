<?php $title = "Recherche médecin || GSB";?>
<?php 
    use GSB\Model\Medecin;
    $medecins = Medecin::findAll(); // Assurez-vous que cette ligne récupère bien tous les médecins
?>

<form action="/chemin_vers_traitement_recherche" method="post">
    <label for="medecin-search">Choisir un médecin :</label>
    <input list="medecins" id="medecin-search" name="medecin-search" placeholder="Tapez pour chercher...">
    <datalist id="medecins">
        <?php foreach ($medecins as $medecin): ?>
                <option value="<?php echo $medecin['nom'] . ' ' . $medecin['prenom']; ?>">
                    <?php echo $medecin['nom'] . ' ' . $medecin['prenom'];?>
                </option>
        <?php endforeach; ?>
    </datalist>
    <button type="submit">Rechercher</button>
</form>
