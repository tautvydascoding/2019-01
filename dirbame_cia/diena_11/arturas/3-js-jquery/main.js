/*jshint esversion: 6 */
console.log(   " mano js failas "  );
// $("h1").hide(3000);
// $("h1").show(2000);
$("h1").click(function(){
  $("p").toggle(500);
});
let manoH1 = $("h1");
  manoH1.mouseenter(function(event) {
  manoH1.css("cursor", "pointer");
  manoH1.css("color", "green");
  manoH1.css("background-color", "yellow");
});

let manoCSS = {
  "cursor": "pointer",
  "color": "green",
  "background-color": "yellow"
};
$("p").mouseenter(function(){
  $(this).css(manoCSS);
});
