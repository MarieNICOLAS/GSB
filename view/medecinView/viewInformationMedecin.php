<?php $title = "Informations Médecin | GSB";
$email = "<a href='mailto:" . htmlspecialchars($medecin['email']) . "'>" . htmlspecialchars($medecin['email']) . "</a>";
if ($medecin): ?>
    <h2>Informations sur le Médecin</h2>
    <ul>
        <li><strong>Nom:</strong> <?php echo htmlspecialchars($medecin['nom']); ?></li>
        <li><strong>Prénom:</strong> <?php echo htmlspecialchars($medecin['prenom']); ?></li>
        <li><strong>Adresse:</strong> <?php echo htmlspecialchars($medecin['adresse']); ?></li>
        <li><strong>Téléphone:</strong> <?php echo htmlspecialchars($medecin['telephone']); ?></li>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Spécialité Complémentaire:</strong> <?php echo htmlspecialchars($medecin['specialiteComplementaire']); ?></li>
        <li><strong>Département: </strong><?php echo htmlspecialchars($medecin['departement']); ?></li>
    </ul>
<?php else: ?>
    <p>Aucun médecin trouvé.</p>
    <form action="/monCompte"><button type="submit">Retour</button></form>
<?php endif; 