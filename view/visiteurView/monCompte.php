<?php 
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true)
{
    header('Location: /connexion');
    exit;
}
?>

<h1>Mon compte</h1>
<div class="content">
    <div class="medecins">
        <h2>Médecins</h2>
        <p><a href="/ajouterMedecin">Ajouter un médecin</a></p>
        <p><a href="/rechercherMedecin">Rechercher médecin</a></p>
        <p><a href="/tousLesMedecins">Tous les médecins</a></p>
    </div>
    <div class="rapports">
        <h2>Rapports</h2>
        <p><a href="/creerRapport">Créer un rapport</a></p>
        <p><a href="/rechercherRapport">Rechercher un rapport</a></p>
        <p><a href="/modifierRapport">Modifier un rapport</a></p>
    </div>
    <div class="monprofil">
        <h2>Mon profil</h2>
        <p><a href="/voirProfil">Mes informations</a></p>
        <p><a href="/traitement-deconnexion">Me déconnecter</a></p>
    </div>
</div>

