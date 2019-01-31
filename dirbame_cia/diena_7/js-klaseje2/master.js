console.log("5555");

//1 UZDUOTIS

for (let i = 0; i < 50; i++) {
  console.log("Azuolas");
};

//1.1 UZDUOTIS

// for (let i = 0; i < 50; i++) {
//   document.write("<h3> Azuolas </h3>")
// };

//1.2 uzduotis
// let article = document.querySelector("article").innerHTML;
//
// for (let i = 0; i < 50; i++) {
//   document.write("<h2> Azuolas </h2>")
// };

//2.1 uzduotis
//
// function printXX(xx) {
//   document.write(xx);
// };
//
// for (let i = 0; i < 50; i++) {
//   printXX("aaaa <br>");
// };

function printLoop(tekstas="Cikla kartoja 100kartu!", kartai=100) {
  for (let i = 0; i < kartai; i++) {
    document.write(tekstas + "<br>")
  };
};

// printLoop('<img src="https://g3.dcdn.lt/images/pix/430x260/W7BW16MZivw/prasidejo-baikeriu-naktys-kaune-74768044.jpg" alt="">', 12);

// 4 UZDUOTIS

function piestiEilute(x="vardas |  pavarde | amzius") {
  document.write(x)
};

function spausdintiStulpeli(x="<br>|") {
  document.write(x)
};



function piestiEiluteLoop(eil="-  ", k=20) {
  for (let i = 0; i < k; i++) {
    document.write(eil);
    // document.querySelector("p").innerHTML = eil;
  }
}

// eglute
// let s = ""
// for (let i = 0; i < 7; i++) {
//   s+="#";
//   console.log(s);
// }

let menAtlyginimas = 680;
let kiekMenesiu = 10 * 12;
let algosPokytis = 0.01;
for (let i = 0; i < kiekMenesiu ; i++) {
  menAtlyginimas = menAtlyginimas+(menAtlyginimas*algosPokytis)
  console.log(menAtlyginimas);
};









//
