<?php
$title = "Mise à jour des rapports | GSB";
?>
<h1>Modifier Rapport</h1>
<form action="/traitement_modification_rapport" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($rapport['id']); ?>">
        
        <label for="date">Date :</label>
        <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($rapport['date']); ?>" required>
        
        <label for="motif">Motif :</label>
        <input type="text" id="motif" name="motif" value="<?php echo htmlspecialchars($rapport['motif']); ?>" required>
        
        <label for="bilan">Bilan :</label>
        <textarea id="bilan" name="bilan" required><?php echo htmlspecialchars($rapport['bilan']); ?></textarea>
        
        <button type="submit">Modifier</button>
    </form>
    <form action="/liste_rapport"><button type="submit">Annuler</button></form>