console.log(   " mano js failas "  );

// $(" h1").hide(3000);
// 1000 = 1 sek       arba 1sek = 1000 mili sek
$(" h1").show(2000);

$("h1").click(function(){
    $("p").toggle(2000);
});

let manoH1 = $("h1");
manoH1.mouseenter(function(event) {
    manoH1.css("cursor", "pointer");
    manoH1.css("color", "blue");
    manoH1.css("background-color", "#f2f2f2");
    manoH1.css("font-size", "10px");
});

// galima daug CSS komandu surasyti kaip js objekta
let manoCSS = {
        "cursor": "pointer",
        "color": "blue",
        "background-color": "#f2f2f2",
        "font-size": "10px"
};

$("p").click(function(){
    $(this).css( manoCSS );
});





///
