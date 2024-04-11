<?php
$title = "Rapports | GSB"; 
?>
<ul>
    <?php foreach ($rapports as $rapport): ?>
        <li><?php echo htmlspecialchars($rapport['motif']) . ' ' . htmlspecialchars($rapport['date']); ?></li>
    <?php endforeach; ?>
</ul>
<form action="/monCompte"><button type="submit">Annuler</button></form>
