console.log(   " mano js failas "  );

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

  let prekiautojai = [];  //tuscias masyvas

  prekiautojai[0] = "Senukai";  //uzpildome masyva
  prekiautojai[1] = "Maxima";
  prekiautojai[2] = "Rimi";
  prekiautojai[3] = "Norfa";
  prekiautojai[4] = "Iki";

  console.log(prekiautojai);


	// 2 pervadinti pirma stalciu pvz + "ir KO"

  prekiautojai[0] = "Senukai ir Ko"; //pakoreguotas pirmas
  console.log(prekiautojai);


 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// prekiautojai[1] = prekiautojai [2];
// prekiautojai[2] = prekiautojai [1]; //cia dingo Maxima
// console.log(prekiautojai);

//kaip ispresti:
let temp = prekiautojai[1]; //reikia susikurti laikinaji kintamaji. Laikini beprasmiai kintamieji: let s, str, string, txt, t, tmp, temp.
prekiautojai[1] = prekiautojai [2];
prekiautojai[2] = temp; //cia panaudojom laikina kintamaji ir taip sukeiteme reiksmes.
console.log(prekiautojai);

	// 3.1  padaryti 3) uzdaviniui f-ja sukeisti Masyvo 2 elementus(x, y)

  function elementuSukeitimas(x, y) {
    let temp1 = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = temp1;
  }
elementuSukeitimas(4, 0);

console.log(prekiautojai); //isspausdinti ne f-ja, o masyva;
