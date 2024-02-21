<?php $title = 'Liste des Médecins | GSB'; ?>
<ul>
    <?php foreach ($medecin as $medecins): ?>
        <li><?php echo htmlspecialchars($medecin['nom']) . ' ' . htmlspecialchars($medecin['prenom']); ?></li>
    <?php endforeach; ?>
</ul>