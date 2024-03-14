<?php $title = "Informations Médecin | GSB";
$email = "<a href='mailto:" . htmlspecialchars($medecin['email']) . "'>" . htmlspecialchars($medecin['email']) . "</a>";
if ($medecin): ?>
    <h2>Informations sur le Médecin</h2>
    <ul>
        <li>Nom: <?php echo htmlspecialchars($medecin['nom']); ?></li>
        <li>Prénom: <?php echo htmlspecialchars($medecin['prenom']); ?></li>
        <li>Adresse: <?php echo htmlspecialchars($medecin['adresse']); ?></li>
        <li>Téléphone: <?php echo htmlspecialchars($medecin['telephone']); ?></li>
        <li>Email: <?php echo $email; ?></li>
        <li>Spécialité Complémentaire: <?php echo htmlspecialchars($medecin['specialiteComplementaire']); ?></li>
        <li>Département: <?php echo htmlspecialchars($medecin['departement']); ?></li>
    </ul>
<?php else: ?>
    <p>Aucun médecin trouvé.</p>
<?php endif; 