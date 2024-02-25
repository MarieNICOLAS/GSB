<!-- Formulaire de recherche de médecin -->
<?php $title = "Recherche médecin || GSB";?>
<form action="" method="post">
    <label>Rechercher un médecin par nom :</label>
    <input type="text" name="nom">
    <button type="submit">Rechercher</button>
</form>

<?php 
    use GSB\Controller\MedecinController;
    $medecin = MedecinController::searchByName(); 
?>
