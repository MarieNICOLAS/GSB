<h1>Liste des Médecins</h1>
<ul>
    <?php foreach ($listeMedecins as $medecin): ?>
        <li><?php echo htmlspecialchars($medecin['nom']) . ' ' . htmlspecialchars($medecin['prenom']); ?></li>
    <?php endforeach; ?>
</ul>