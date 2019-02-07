console.log("mano js darbas");

// susikuriame masyvus, kuriuos veliau idesime i kita masyva masinos

let auto1 = ["Audi", 2003, 2000, 300000];
let auto2 = ["Mazda", 1999, 1000, 800000];
let auto3 = ["Tesla", 2019, 40000, 0];

let masinos = []; //tuscias masyvas

// idedame i masinos masyva kitus sukurtus masyvus auto. Galima ir su push. Tai yra masinos.push(auto2);

masinos[0] = auto1;
masinos [1] = auto2;
masinos [2] = auto3;


//duomenu pakeitimas:

masinos [2][3] = 1005; // keiciame Teslos rida
console.log("nauja Tesla rida:", masinos [2][3]);

masinos [2][0] = "Tesla 3.1"; // keiciame teslos pavadinima
console.log("naujas Tesla pavadinimas:", masinos [2][0]);

masinos [0][2] = 2100; // keiciame Audi kaina
console.log("naujas Audi kaina:", masinos [0][2]);

masinos [0][2] = masinos [0][2] * 1.2; //jei Audi pabrangs 10%
console.log("Audi pabrango 20%:", masinos [0][2]);

// kaip atspausdinti VISUS masinu pavadinimus su FOR ciklu:

for (var i = 0; i < masinos.length; i++) {
  console.log("auto pavadinimas:", masinos [i][0]);
}



// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// ========



     // UZDUOTIS 1.0
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
     // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
     // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
     // D. sukurti masyva 'visiDarbuotojai'
     // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus

let darbuotojas1 = ["Jonas", "Jonaitis", 1980, "inspektorius"];
let darbuotojas2 = ["Ona", "Onute", 1981, "sekretore"];
let darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];

let visiDarbuotojai = [];

visiDarbuotojai.push(darbuotojas1);
visiDarbuotojai.push(darbuotojas2);
visiDarbuotojai.push(darbuotojas3);

console.log(visiDarbuotojai);

// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (nenaudojant FOR ciklo)

console.log("Vardas:", visiDarbuotojai[0][0]);
console.log("Pavarde:", visiDarbuotojai[0][1]);
console.log("Gimimo metai:", visiDarbuotojai[0][2]);
console.log("Pareigos:", visiDarbuotojai[0][3]);


     // UZDUOTIS 1.1
     // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

// sitas neteisingai:
 // for (var i = 0; i < darbuotojas1.length; i++) {
 //     console.log("Darbuotojas1:", darbuotojas1[i]);
 // }

// jei isvedu per visiDarbuotojai masyva, neisveda inspektoriaus, nes masyve nesutampa x ir y skaiciai, todel i skaiciuoja tik iki 3 ir nerodo 4 reiksmes. Reikia ivesti visiDarbuotojai[0].

for (var i = 0; i < visiDarbuotojai[0].length; i++) { //ieskoti visiDarbuotojai masyvo 0 stalciuke, jo y asyje bus daugiau i nei x asyje.
    console.log("Darbuotojas1xx:", visiDarbuotojai[0][i]);
}

// destytojo variantas:



     // UZDUOTIS 1.2
     // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

     for (var i = 0; i < visiDarbuotojai.length; i++) {
         console.log("Darbuotojo vardas:", visiDarbuotojai[i][0]);
     }

     // isvesti visu darbuotoju gimimo datas

     for (var i = 0; i < visiDarbuotojai.length; i++) {
         console.log("Darbuotojo gimimo data:", visiDarbuotojai[i][2]);
     }

     // 0 - kelintas darbuotojas;
     // i - dideja nuo 0 iki ... [i] vieno konkretaus darbuotojo duomenys is skirtingu stalciuku (y kryptimi)

     // UZDUOTIS 1.3
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

     // mano variantas:
     for (var i = 0; i < visiDarbuotojai.length; i++) {
         console.log("Darbuotojas:", visiDarbuotojai[i] );
     }


    // destytojo variantas:
     for (var i = 0; i < visiDarbuotojai.length; i++) {
         console.log("DarbuotojasDestytojo:", visiDarbuotojai[i][0], visiDarbuotojai[i][1],visiDarbuotojai[i][2], visiDarbuotojai[i][3] );
     }

     // UZDUOTIS 1.4
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

     for (var i = 0; i < visiDarbuotojai.length; i++) { // sitas ciklas skaiciuos tik darbuotojus ir nieko neisvedines
              for (var k = 0; k < visiDarbuotojai[i].length; k++) { //sitas ciklas cikle skaiciuos, kiek duomenu turi kiekvienas darbuotojas (gal vieno duomenu yra 4, o kito 7 stalciai). Todel imam visiDarbuotojai[i], kad imtu ir skaiciuotu ciklas kiekvieno darbuotojo. Jei rasytum visiDarbuotojai[0], imtu tik pirmo darbuotojo.
              console.log(visiDarbuotojai[i][k]);
              }
              console.log("--------------"); // skirtukas tarp duomenu
     }


     // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
     // 1.5) surasti jauniausia darbuotoja

     // for (var i = 0; i < visiDarbuotojai.length; i++) {
     //          let jauniausias = Math.max(visiDarbuotojai[i][2]);
     //     console.log(jauniausias);
     // }
     //
     // // let ffff = [15, 25, 2, 105];
     // console.log(Math.max(15, 125, 2, 105));

// Destytojo:

  let veliausiaiGimes = 0; //kad tikrai negali buti realybeje
  let jauniausioNumeris = -99999999;

     for (var k = 0; k < visiDarbuotojai.length; k++) {
       //console.log("amzius:", visiDarbuotojai[k][2]); //patikrinam, ar randa amziu
        if (visiDarbuotojai[k][2] > veliausiaiGimes) {
          veliausiaiGimes = visiDarbuotojai[k][2]; // cia if'as suveike, rado jaunesni, tai cia priskiriam naujam jauniausiam reiksme.
          jauniausioNumeris = k; // uzfiksuojam to jauniausio numeri nurodant jo stalciu k.
          //console.log("radau", visiDarbuotojai[k][2]);
        }
     }
     console.log("Jauniausio darbuotojo nr:", jauniausioNumeris);
     console.log("Jauniausio gimimo metai:", veliausiaiGimes);

     // 1.6) surasti seniausia darbuotoja
     // 1.6) apskaiciuoti darbuotoju amziaus vidurki

    // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
    // 2.B. i masyva visosPrekes, ideti "preke" masyva

// let visosPrekes = [];
//
// let preke1 = ["kompiuteris", "komp.img", 200, "kompiuteris su lieciamu ekranu"];
// let preke2 = ["telefonas", "telef.img", 85, "telefonas Samsung 5000 ix"];
// let preke3 = ["plansete", "plans.img", 150, "plansete Sony su papildoma iranga"];
// let preke4 = ["pele", "pele.img", 10, "pele juoda ir belaide"];
//
//  visosPrekes [0] = preke1;
//  visosPrekes [1] = preke2;
//  visosPrekes [2] = preke3;
//  visosPrekes [3] = preke4;
//
//  console.log(visosPrekes);



    // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

   // nuotrauka (javascript kalbai)
   // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

   // 2  budai nuotraukoms (PHP kalbai)
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



    // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
    // 3.1 surikiuoti prekes pagal kaina didejanciai
    // 3.2 atrinkti prekias iki 100 eur
    // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
    // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
//
