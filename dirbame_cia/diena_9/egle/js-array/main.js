console.log(   " mano js failas "  );

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

  let prekiautojai = [];

  prekiautojai [0] = "senukai";
  prekiautojai [1] = "maxima";
  prekiautojai [2] = "rimi";
  prekiautojai [3] = "iki";
  prekiautojai [4] = "norfa";

  console.log(prekiautojai);

	// 2 pervadinti pirma stalciu pvz + "ir KO"

prekiautojai [0] = "senukai ir ko";

console.log(prekiautojai [0]);

 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

    // prekiautojai [5] = prekiautojai [2];
    // console.log(prekiautojai);
    //
    // prekiautojai [2] = prekiautojai [3];
    // console.log(prekiautojai);
    //
    // prekiautojai[3] = prekiautojai [5];
    //
    // console.log(prekiautojai);
    //
    // prekiautojai.splice(5);
    //
    // console.log(prekiautojai);
          // ARBA

    let temp = prekiautojai[1];
// let s, str, string, txt, text, t, tmpt, temp <-----  dazniausiai naudojami laikini beprasmiai kintamieji;

prekiautojai[1] = prekiautojai[2];
prekiautojai[2] = temp;

console.log(prekiautojai);



	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

//   function sukeistiMasyvo2elementus(x, y){
//     let temp = x;
//
//     prekiautojai[x] = prekiautojai[y];
//     prekiautojai[x] = temp;
//
//   }
// sukeistiMasyvo2elementus( 2 , 3);
//
// console.log(prekiautojai);

function sukeisti (nr1, nr2){
  let temp = prekiautojai[nr1];
  prekiautojai[nr1] = prekiautojai[nr2];
  prekiautojai[nr2] = temp;

}
sukeisti(3, 4);

console.log("po keitimo f-joje:", prekiautojai);

	// var prekiautojai = []; // empty array
