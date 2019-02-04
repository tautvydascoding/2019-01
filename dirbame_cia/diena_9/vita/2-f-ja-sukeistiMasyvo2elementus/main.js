console.log(   " mano js failas "  );
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

let prekiautojai = ["Maxima", "Senukai", "Rimi", "IKI", "zalia stotele"];

console.log( prekiautojai );


	// 2 pervadinti pirma stalciu pvz + "ir KO"

prekiautojai[2] = "Rimi ir Ko";
console.log( prekiautojai );

 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

//let temp = prekiautojai [1]; // laikinas kintamasis
// let s, str, string, txt, t, tmp, temp;  // laikini kintamieji

//prekiautojai [1] = prekiautojai [2]
//prekiautojai [2] = temp;
//console.log( prekiautojai );


	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeisti(nr1, nr2){
  let temp = prekiautojai [nr1];
  prekiautojai [nr1] = prekiautojai [nr2];
  prekiautojai [nr2] = temp;
}
sukeisti(0,3);
console.log( prekiautojai );
