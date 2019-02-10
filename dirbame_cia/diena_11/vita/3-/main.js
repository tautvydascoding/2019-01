console.log(   " mano js failas "  );

//$("h1").hide(1); //letai paslepia elementa skaicius skliaustuose yra greitis
//$("h1").show(3000); //letai parodo elementa

$("h1").click(function(){
$("p").hide(2000);
});

$("h1").click(function(){
  $("p").togle(2000);
});

let manoH1 = $("h1");
$("h1").mouseenter(function(event) {
  manoH1.css("cursor", "pointer");
  manoH1.css("color", "blue");
  manoH1.css("background-color", "pink");
  manoH1.css("font-size", "40px");
});

//galima daug css komandu surasyti kaip javascript objekta



  let manoCSS = {
    "cursor" : "pointer",
    "color" : "brown",
    "background-color" : "pink", // kai pavadinimas per bruksneli arba kur matavimmo vienetai, privalo buti ideta i kabutes
    "font-size" : "70px"
  };

  $("p").click(function(){
    $(this).css(manoCSS); // this!!!!
  });
