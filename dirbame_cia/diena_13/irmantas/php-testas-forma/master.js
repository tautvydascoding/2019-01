let textarea = document.querySelector("textarea")

$.ajax({
  method: "POST",
  url: "data.php",
  data: { name : "name"}
})
  .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });



















//
