<?php $title = 'Liste des Médecins | GSB'; ?>
<ul>
    <?php foreach ($medecins as $medecin): ?>
        <li><?php echo htmlspecialchars($medecin['nom']) . ' ' . htmlspecialchars($medecin['prenom']); ?></li>
    <?php endforeach; ?>
</ul>