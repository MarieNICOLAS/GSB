<?php
$title = "Rapports | GSB";
?>
<h1>Liste des Rapports</h1>
    <?php if (!empty($rapports)): ?>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                    <th>ID Médecin</th>
                    <th>ID Visiteur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rapports as $rapport): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($rapport['date']); ?></td>
                        <td><?php echo htmlspecialchars($rapport['motif']); ?></td>
                        <td><?php echo htmlspecialchars($rapport['bilan']); ?></td>
                        <td><?php echo htmlspecialchars($rapport['idMedecin']); ?></td>
                        <td>
                            <a href="/modifier_rapport?id=<?php echo $rapport['id']; ?>">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun rapport trouvé.</p>
    <?php endif; ?>
    <form action="/monCompte"><button type="submit">Retour</button></form>