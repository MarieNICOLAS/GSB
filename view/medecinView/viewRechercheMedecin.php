<!-- Formulaire de recherche de médecin -->
<?php $title = "Recherche médecin || GSB";?>
<form action="" method="post">
    <label>Rechercher un médecin par nom :</label>
    <input type="text" name="nom">
    <button type="submit">Rechercher</button>
</form>

<?php 
    
    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
        $medecins = \GSB\Model\Medecin::findByName($nom);
        if ($medecins) {
            foreach($medecins as $medecin) { // Corrigé la variable dans foreach
                $mail = $medecin['email'];
                $email = '"mailto:';
                $mail = "<a href=$email" . $mail . '">';
                
                echo "<li>";
                echo "<strong>Nom: </strong>" . $medecin['nom'] . "<br>";
                echo "<strong>Prenom:</strong>" . $medecin['prenom'] . "<br>";
                echo "<strong>Téléphone:</strong>" . $medecin['telephone'] . "<br>";
                echo "<strong>Adresse:</strong>" . $medecin['adresse'] . "<br>";
                echo "<strong>Email:</strong>" . $mail . $medecin['email'] . "</a><br>";
                echo "<strong>Spécialité:</strong>" . $medecin['specialiteComplementaire'] . "<br>";
                echo "<strong>Départemnt:</strong>" . $medecin['departement'] . "<br>";
                echo "</li>";
            }
        } else {
            echo "0 resultat";
        }
    }   
?> 
