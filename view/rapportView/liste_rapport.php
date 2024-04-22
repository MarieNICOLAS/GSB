<?php

use GSB\Model\Medecin;

$title = "Rapports | GSB";
$rapports = GSB\Model\Rapport::findAll();
?>

<table>
    <thead>
        <tr>
            <th>Médecin</th>
            <th>Date</th>
            <th>Motif</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rapports as $rapport): 
            $medecin = Medecin::getMedecinName($rapport['idMedecin']);
            ?>
            <tr>
                <td><?= htmlspecialchars($medecin) ?></td>
                <td><?= htmlspecialchars($rapport['date']) ?></td>
                <td><?= htmlspecialchars($rapport['motif']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form action="/monCompte"><button type="submit">Retour</button></form>