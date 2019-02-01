

let age = 55;
if (age < 14) {
  console.log("reklama iki 14m");
} else if (age < 18) {
  console.log("reklama iki 18m");
} else {
  console.log("reklama suaugusiems");
}

//UZDUOTIS.
// A) Sukurti kintamuosius: arVedes ir arDuotiPaskola = false.
// patikrinti ar zmogus vedes, jeigu taip - duoti paskola, jeigu nevedes, neduoti paskolos.
// su console.log pranesti, ar zmogui paskola bus duodama.

let arVedes = true;

let arDuotiPaskola = false;

if (arVedes == true) {
  arDuotiPaskola = true;
  console.log("siam zmogui paskola duodama");
} else {
  arDuotiPaskola = false;
  console.log("neduos paskolos");
  }

  // =================if  teorija====================
  // if ( true ) {
  //     console.log("labas");
  // }
  if(true){
  	console.log("labas")
  }

  // if (salyga) {
  //     // jei true
  //     //
  //     //
  // } else {
  //     // jei false
  // }


  // if ( salyga ) {
  //     // jei salyga tenkinama
  // }
  //
  // if ( salyga ) {
  //     // jei salyga tenkinama
  // } else {
  //     // jei salyga netenkinama  / priesingu atveju
  // }
  //
  // if (salyga) {
  //
  // } else if (salyga) {
  //
  // } else {
  //     // ?
  // }

  //=============IF====================
  // 0 UZDUOTIS
  // A)
  // susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
  // patikrinti:
  // jeigu vardai sutampa, i konsole pranesti apie tai
  // jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

  let vardas1 = "Tomas";
  let vardas2 = "Antanas";
  if (vardas1 == vardas2) {
    console.log("sutampa");

  } else {
    console.log("nesutampa");
  }

  // B)
  // Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

  if (vardas1 == "Tomas") {
    console.log("Labas");
  }

  // C)
  // Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

  if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log("taip, vardai Tomas ir Karolis");
  } else {
    console.log("ne");
  }

  // D)
  // Patikrinti ar bent vienas is vardu "Tomas"
  // || - arba

  if (vardas1 == "Tomas" || vardas2 == "Tomas") {
    console.log("taip, vienas is vardu Tomas");
  } else {
    console.log("Tomo vardo nera");
  }


  // 1 UZDUOTIS
  // turesime vartotojo amziu
  // let age = 24;
  // gapal ji, turesiem isvesti tam tikra reklamos teksta

  // Salygos:

  // iki 7 metu
  //      "Pliusines varles"
  // nuo 7 iki 14
  //      "Mini telefonai"
  // nuo 14 iki 18
  //      "new Music App"
  // nuo 18 iki 24
  //      "Stok i sauliu sajunga"
  // nuo 24 iki 65
  //      "Pensijos kaupimas - zusiregistruok"
  // nuo 65
  //      "kelione i Bristona"


let ageVaiko = 65;

if (ageVaiko < 7 ) {
  console.log("Pliusines varles");
} else if (ageVaiko >= 7 && ageVaiko < 14) {
  console.log("Mini telefonai");
} else if (ageVaiko >= 14 && ageVaiko < 18) {
  console.log("new Music App");
} else if (ageVaiko >= 18 && ageVaiko < 24) {
  console.log("Stok i Sauliu sajunga");
} else if (ageVaiko >= 24 && ageVaiko < 65) {
  console.log("Pensijos kaupimas - uzsiregistruok");
} else {
  console.log("kelione i Bristona");
}

  // sunkesne:
  //      (i 'if' vidu ideti papildoma 'if')
  //      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

  let ageAsmens = 80;

  if (ageAsmens < 7 || ageAsmens > 65 ) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
    if (ageAsmens < 7) {
      console.log("Pliusines varles");
    } else {
      console.log("kelione i Bristona");
    }
  } else if (ageAsmens >= 7 && ageAsmens < 14) {
    console.log("Mini telefonai");
  } else if (ageAsmens >= 14 && ageAsmens < 18) {
    console.log("new Music App");
  } else if (ageAsmens >= 18 && ageAsmens < 24) {
    console.log("Stok i Sauliu sajunga");
  } else if (ageAsmens >= 24 && ageAsmens < 65) {
    console.log("Pensijos kaupimas - uzsiregistruok");
  }



  // 2 UZDUOTIS
  // sukurti 3 vardus "Tomas", "Paulius", "Airidas"
  // susikurti kintamaji 'klietoVardas' - kurio reiksme lyginsime
  // kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
  // kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
  // kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

vardass1 = "Tomas";
vardass2 = "Paulius";
vardass3 = "Airidas";

let klientoVardas = "Airidas";

if (klientoVardas == vardass1) {
  console.log("Masinoms 10% nuolaida");
} else if (klientoVardas == vardass2) {
  console.log("Buitinei technikai  30% nuolaida");
} else if (klientoVardas == vardass3) {
  console.log("5% nuolaida kelionems");
}


  // 3 UZDUOTIS
  // sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
  // susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
  // kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
  // kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
  // kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
  //

tipas1 = "bronze";
tipas2 = "silver";
tipas3 = "gold";

let klientoTipas = "marius";

if (klientoTipas == tipas1) {
  console.log("15% nuolaida");

} else if (klientoTipas == tipas2) {
  console.log("30% nuolaida");

} else if (klientoTipas == tipas3) {
  console.log("50% nuolaida");
} else {
  console.log("5% nuolaida");
}
