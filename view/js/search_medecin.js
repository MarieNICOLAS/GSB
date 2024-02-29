$(document).ready(function() {
    $("#formRecherche").on("submit", function(e) {
        e.preventDefault(); // Empêche la soumission traditionnelle du formulaire
        var searchTerm = $("#recherche").val().trim();
        if (searchTerm.length > 2) { // Déclenche la recherche si plus de 2 caractères sont tapés
            $.ajax({
                url: "/traitement_recherche_medecin", // Utilisez l'URL de traitement AJAX existante
                type: "GET",
                data: { recherche: searchTerm },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        $("#resultatsRecherche").empty(); // Vide les résultats précédents
                        $.each(data.medecins, function(index, medecin) {
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
