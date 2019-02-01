console.log(   " mano js failas "  );
// 3 UZDUOTIS
// 1) // sukurti kintamuosius:
 // arRodyti =   (galimi variantai true/ false)
 // vartotojoTipas =   "admin";
 // userName = "Tomas";
// 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :  jeigu true isvestu : Labas Tomai
// jeigu false isvestu : Sveiki
//  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima, bet ir koki nors paveiksliuka

let arRodyti = true;
let vartotojoTipas = "admin";
let userName = "Tomas";

if (arRodyti == true){
  console.log("Labas, Tomai");
} else {
console.log("Sveiki");
}

if (vartotojoTipas == "admin"){
  console.log("Labas, Tomai" );
  document.querySelector("body").innerHTML += "Labas, Tomai"  ;
  document.querySelector("body").innerHTML += "<br>" + '<img src="http://memecrunch.com/meme/1H9Y0/hello-admin/image.jpg" alt=’adminas’>' ;
}
