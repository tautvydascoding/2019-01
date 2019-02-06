// Matricos - masyvas masyve

let masinos = [];

let auto1 = ["Tesla", 2019, 40000, 0];
let auto2 = ["Mazda", 2015, 9000, 100000];
let auto3 =["Audi", 2003, 2000, 300000];

masinos[0] = auto1;
masinos[1] = auto2;
masinos[2] = auto3;

console.log(masinos);

// Pakeitimas Teslos ridos

masinos[0][3] = 1000;

//Pakeitimas Audi kainos
masinos[2][2] = 2300;
console.log(masinos);

//isvedimas kainos

console.log(masinos[2][2]);

//isvedimas pavadinimu

for (let i = 0; i < masinos.length; i++) {
        console.log("pavadinimai", masinos[i][0]);
        
}
//Uzduotys matrix

let darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
let darbuotojas2 =  ["Ona", "Onute", 1980, "sekretore"];
let darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
let visidarbuotojai = [];
visidarbuotojai[0] = darbuotojas1;
visidarbuotojai[1] = darbuotojas2;
visidarbuotojai[2] = darbuotojas3;

//pirmo darbuotojo isvedimas i ekrana

for (let i = 0; i < visidarbuotojai[0].length; i++) { // 0 kelintas darbuotojas
        console.log(visidarbuotojai[0][i]);
          
}
//Visu darbuotoju vardai
for (let i = 0; i < visidarbuotojai.length; i++) {
        console.log(visidarbuotojai[i][0]);
          
}
 
//Visu darbuotoju info
for (let i = 0; i < visidarbuotojai.length; i++) {
        console.log(visidarbuotojai[i]);
        
}
//isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
     

for (let i = 0; i < visidarbuotojai.length; i++) {
        console.log("------------");
        
        
       for (let j = 0; j < visidarbuotojai[i].length; j++) {
               console.log(visidarbuotojai[i][j]);
               
               
       }
        
}


//Ieskoti jauniausio, ieskom didziausios datos
let didziausiadata = 0;
let jauniausioNr = -999;
for (let k = 0; k < visidarbuotojai.length; k++) {
        // console.log(visidarbuotojai[k][2]);
let didziausiadata = 0;
        if(visidarbuotojai[k][2] > didziausiadata ){
                jauniausias = visidarbuotojai[k][2];
                jauniausioNr = k;      
        }
}
console.log(jauniausias, jauniausioNr);

// //uzduotis 2

// let antraste = ["pepsi", "muilas", "cola"];
// let img_pavadinimas = [];
// let kaina = [2, 1, 2];
// let prekes_aprasymas = ["lorem1", "lorem2", "lorem3"];
// let visosprekes = [];
// visosprekes[0] = antraste;
// visosprekes[1] = img_pavadinimas;
// visosprekes[2] = kaina;
// visosprekes[3] = prekes_aprasymas;