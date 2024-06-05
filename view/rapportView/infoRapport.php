<?php
$title = "Information Rapport | GSB"; 

if ($rapports):?>
<ul>
    <?php foreach ($rapports as $rapport): ?>
        <li>
            <strong>Date :</strong> <?php echo htmlspecialchars($rapport['date']); ?><br>
            <strong>Motif :</strong> <?php echo htmlspecialchars($rapport['motif']); ?><br>
            <strong>Bilan :</strong> <?php echo htmlspecialchars($rapport['bilan']); ?><br>
            <strong>Médecin :</strong> <?php echo htmlspecialchars($rapport['idMedecin']); ?><br>
            <strong>Visiteur :</strong> <?php echo htmlspecialchars($rapport['idVisiteur']); ?><br>
        </li>
    <?php endforeach; ?>
</ul>
<?php else: ?>
    <p>Aucun rapport trouvé pour cette date.</p>
    <form action="/monCompte"><button type="submit">Retour</button></form>
<?php endif; 
