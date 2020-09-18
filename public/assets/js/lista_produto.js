$(document).ready(function(){
  $("#pesquisa-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbody-prod tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});