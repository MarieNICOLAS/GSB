<?php $title = "Trouver un médecin | GSB"; ?>
<form action="" method="get">
    <label for="recherche">Trouver un médecin :</label>
    <input type="text" id="recherche" name="recherche" required>
    <button type="submit">Rechercher</button>
</form>
<div id="resultatsRecherche"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#recherche").on("keyup", function() {
        var searchTerm = $(this).val().trim();
        if (searchTerm.length > 2) { // Déclenche la recherche si plus de 2 caractères sont tapés
            $.ajax({
                url: "/searchMedecin", // Assurez-vous que cette URL correspond à votre routeur
                type: "GET",
                data: { term: searchTerm },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        $("#resultatsRecherche").empty(); // Vide les résultats précédents
                        $.each(data.data, function(index, medecin) {
                            // Assurez-vous que `medecin.nom` et `medecin.prenom` correspondent à vos clés de données
                            $("#resultatsRecherche").append("<li>" + medecin.nom + " " + medecin.prenom + "</li>");
                        });
                    } else {
                        $("#resultatsRecherche").html("<li>Aucun médecin trouvé.</li>");
                    }
                },
                error: function() {
                    $("#resultatsRecherche").html("<li>Erreur lors de la recherche.</li>");
                }
            });
        } else {
            $("#resultatsRecherche").empty();
        }
    });
});
</script>
