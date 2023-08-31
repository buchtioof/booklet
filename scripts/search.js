$(document).ready(function() {
    // Au chargement de la page
    $("#searchForm").hide(); // Cacher le formulaire de recherche
  
    // Au clic sur le bouton de recherche réduit
    $("#searchButton").click(function() {
      $("#searchButton").hide(); // Cacher le bouton de recherche réduit
      $("#searchForm").show().addClass("d-flex"); // Afficher le formulaire de recherche et le rendre flexible
    });
  });