<?php $title = "Trouver un médecin | GSB"; ?>

<form action="" method="get" id="form_search" >

    <label>Trouver un médecin :</label>
    <input type="text" name="recherche">

    <button type="submit">Rechercher</button>
    <div id="resultats_recherche"></div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#form_search").on("submit", function(e) {
        e.preventDefault(); // Empêche la soumission traditionnelle du formulaire
        
        var search_term = $("#recherche").val().trim();
        var form_url = $(this).attr("action");
        
        if (search_term.length > 2) { // Déclenche la recherche si plus de 2 caractères sont tapés
            $.ajax({
                
                url: form_url, // Utilisez l'URL de traitement AJAX existante
                type: "GET",
                data: { term: search_term },
                
                success: function(response) {

                    var data = JSON.parse(response);

                    if (data.success) {
                        $("#resultats_recherche").empty(); // Vide les résultats précédents
                        $.each(data.medecins, function(index, medecin) {
                            $("#resultats_recherche").append("<li>" + medecin.nom + " " + medecin.prenom + "</li>");
                        });
                    } else {
                        $("#resultats_recherche").html("<li>Aucun médecin trouvé.</li>");
                    }
                },
                error: function() {
                    $("#resultats_recherche").html("<li>Erreur lors de la recherche.</li>");
                }
            }).done(function(resultats_recherche){
                $("#resultats_recherche").html(resultats_recherche);
            });
        } else {
            $("#resultats_recherche").empty();
        }
    });
});
</script>
