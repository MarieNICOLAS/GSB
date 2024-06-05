<?php

use GSB\Model\Medecin;

$title = "Rapports | GSB";
?>

<h1>Les rapports</h1>
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
                        <td><?= htmlspecialchars($rapport['date']); ?></td>
                        <td><?= htmlspecialchars($rapport['motif']); ?></td>
                        <td><?= htmlspecialchars($rapport['bilan']); ?></td>
                        <td><?= htmlspecialchars($rapport['idMedecin']); ?></td>
                        <td><?= htmlspecialchars($rapport['idVisiteur']); ?></td>
                        <td>
                            <a href="/modifier_rapport?id=<?= $rapport['id']; ?>">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun rapport trouvé.</p>
    <?php endif; ?>
    <form action="/monCompte"><button type="submit">Retour</button></form>
