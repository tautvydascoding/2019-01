// $("h1").hide(3000);
// $("h1").show(2000);
// let elh1 = "h1"
// for (let i = 0; i < 50; i++) {


//   }
  
// }
// $("h1").click(function(){
//   $("p").hide(1000);
// });

// $("h1").mouseenter(function () { 
//   $("h1").css("cursor", "pointer");
// });

// $("h1").click(function(){
//   $("p").toggle();
// });

// let manoH1= $("h1")
// manoH1.mouseenter(function (event) { 
//   // manoH1.css("cursor", "pointer");
//   manoH1.css("color", "red");
//   manoH1.css("background-color", "yellow");
//   manoH1.css("font-size", "12px");
// });

// galima daug css komandu surasyti, kaip js objekta

let manocss = { "cursor": "pointer",
                "color": "red",
                "background-color": "yellow",
                "font-size": "22px",

};

// $("p").click(function(){
//   $("p").css("cursor", "pointer");
//   $('p').css(manocss);
// });

// paspaudus ant tik ant to p, konkretaus, naudojam this
// $("p").click(function(){
//   $(this).css(manocss);
// });

// // last komanda ir even ir odd
// $('p:even').css("color", "blue");
// $('p').last().css("color", "red");

// //siblings surasti visus brolius p
// $('p').next().css("color", "red");

//uzduotis 9diena 
$("h1,h2").css("color","blue");
$("h2:odd").css("color","red");
$('li').last().css("color", "green");
$("li").not(".reklama").css("background-color", "yellow");
$("section h2").css("background-color","blue");
$("input[name=pastas]").css("background-color","blue");




























//
