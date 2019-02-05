// // let x = 0;
// // function test4(x) {
// //     console.log(x); //=8
// //     console.log(this.x); //=0
// //     console.log(window.x); //=0
    
// // }

// // z=test4(8);
// // console.log(z);
// // //
// // let y = 1;
// // function test5() {
// //     y=2;
// //     console.log(y); //=2
    
// // }
// // console.log(y); // = 1

// // z=test5();
// // console.log(y); // = 2 nes f-joje y=2, o jeigu butu let y =2 tada butu =1

// /////////////////////////////////////
// // ====================Scope====================
// //   UZDUOTIS  A
// // sukurti funkcija "printDuomenys()" ,
// // funkcijoje sukurti kintamaji: var vardas = "Tomas"
// // kuri  atspausdina i konsole  kintamaji "vardas"
// // iskviesti f-ja

// function printDuomenys1(){
//     var vardas1 = "Tomas";
//     console.log(vardas1);
// }
// printDuomenys1();



// //   UZDUOTIS  B
// //  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
// //  console.log( vardas) ;
// // NOTE: gaunate kalida ar ne?
// var vardas2 = "kjk"
// function printDuomenys2(){
//     var vardas2 = "Tomas";
// }
// printDuomenys2();
// console.log(vardas2);


// //================local && global=========
// // var x = "x -viesas ";
// // function testLocalVar() {
// //    var y = "y -vietinis ";
// //    z = "z -viesas";
// //    console.log("x", x); //viesas    
// //    console.log("y", y); //vietinis
// //    console.log("z", z); //viesas
// // }
// // testLocalVar();
// // console.log("x", x); //geras viesas
// // console.log("z", z); // geras viesas
// // console.log("y", y); //neveiks, nes f-joj



// //------
//  // UZDUOTIS
//  // A) sukurti kintamaji var katinas = "juodas"
//  // B) sukurti f-ja
//  // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
//  // D) atspauzdinti abu f-jos viduje
//  // E) atspauzdinti  uz f-jos

// var katinas = "juodas";
// function juodas(){
//     var katinas = "baltas";
//     console.log(katinas);
    
// }
// juodas();
// console.log(katinas);

//  var katinas = "juodas";
 
//  function test2() {
//      var katinas = "baltas";
//     console.log("1 katinas:", katinas); //baltas
//     console.log("2 this.katinas - f-jos viduje: ",  this.katinas);//juodas
//  }
//  test2();
 
//  console.log("3 katinas:", katinas); //juodas

// //==========================

//  var xx = 10;
 
//  function isvesti( xx ) {
//      xx = 20;
//      console.log( "1. xx:", xx);
//      console.log( "2. this.xx:",   this.xx);
//  }
//  console.log( "3. xx:", xx); //10


//  //======================
//  var vardas = "Jonas";
//  function myName ( vardas ) {
//      console.log( " vardas" + vardas); //Petras
//      console.log("this.vardas - f-jos viduje: ",  this.vardas);  //Jonas 
//  }
//  myName("PETRAS");
// //======================TEKSTO ISVEDIMAS===============


// //  1.1 UZDUOTIS
// //  sukurti funkcija "printAntraste(x)" ,
// //  kuri atspausdina i DOM-a (ekrana) "x" reiksme
// //  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

// // function printAntraste(x) {
// //     document.querySelector("Html").innerHTML = " " + x + " ";


// // }
// // printAntraste("BMW pinga nes daugeja");

// // //  1.2 UZDUOTIS
// // //  sukurti funkcija "printStraipsnis(x)"
// // //  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")
// // function printStraipsnis(y) {
// //     document.querySelector("Html").innerHTML = "<p>" + y + "</p>";

// // }
// // printStraipsnis("BMW pinga, nes daugeja");


// //  1.3 UZDUOTIS
// //  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

// function printStraipsnis(lorem, lorem2) {
//     document.querySelector("Html").innerHTML += "<h2>" + lorem + "<h2>";
//     document.querySelector("Html").innerHTML += "<p>" + lorem2 + "</p>";
    

// }
// printStraipsnis("Pirma antraste", "lorem1");
// printStraipsnis("Antra antraste", "lorem2");
// printStraipsnis("Trecia antraste", "lorem3");

// //=======================================

// //Array uzduotys

console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

 

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// let ieskomasis = "Rico";
// for (let i = 0; i < names.length; i++) {
//     if(names[i] === ieskomasis){
//         console.log("Radom riko");
        
//     }
    
// }


// function pirmas (){
//     let ieskom = "Rico";
// for (let i = 0; i < names.length; i++) {
//     if(names[i] === ieskom){
//        let ricco = i;
//         return ricco
        
//     }   
// }
// }
// let radom = pirmas();
// console.log(radom);

// let ieskomasis = "Rico";
// for (let i = 0; i < names.length; i++) {
//     if(names[i] === ieskomasis){
//         console.log("Radom riko");
//         let nr = i;
//         console.log(nr);
        
//         break; // kai tik suranda viena Rico, tai sustoja
//     }
    
// }


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// let ieskomasis = "Ricccoo";
// for (let i = 0; i < names.length; i++) {
//     if(names[i] === ieskomasis){
//         console.log("Radom riko");
//         let nr = i;
//         console.log(nr);      
//     }else{
//         console.log("Nepavyko rasti...Bandykite kita zodi");
        
//     }
    
// }

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
// function getStalciausNumeris(vardas) {

//     for (let i = 0; i < names.length; i++) {
//         if(names[i]===vardas){
//             vieta = i;
//             console.log(vieta);
//             return vieta

//         }
        
//     }
//   }
//   getStalciausNumeris("Naida");
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

// //3 uzduotis
// function pavarde(){
// let vardas = "Freida";
// for (let i = 0; i< names.length; i++) {
//     if(names[i]=== vardas ){
//         vieta = i;
//         console.log(vieta);
//         return vieta
//     }
// }

// }
// let radom = pavarde();
// let pav = lastNames[37];
// console.log(pav);

//4 uzduotis

// let vard = "Rico"
// for (let i = 0; i < names.length; i++) {
//     if(names[i] === vard){
//         number = i;
        
//         let pavardes = lastNames[number];
//         console.log(vard +" "+ pavardes);
//     }
    
// }

// let pirmas = names[number];
// console.log(pirmas);


// 5uzduotis

let vardai = names[2, 16, 17, 18, 19, 25];
no = -999;
for (let i = 0; i < ieskomiZmones[i]; i++) {
    if(i==no){
        
    console.log(names[no]);
    }
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
