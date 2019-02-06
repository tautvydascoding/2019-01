//6 dienos 1.1 uzduotis 
function printkaina(x){
    console.log(x);

}
printkaina(15.99);

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
//1.2

function print(x, y, z){
    console.log(x, y, z);

}
print(999, 13.49, 100.05);

//2.2

function pazymiuvidurkis(vardas, x1, x2, x3, x4, x5){
    let vidurkis = ((x1 + x2 + x3 + x4 + x5) / 5);

    console.log(vardas,vidurkis);
}
pazymiuvidurkis("Antanas", 5, 10, 5, 6, 8);

//return 1 uzduotis

function getvardas(){
    let vardas = "Tomas";
    
    return "Jonas";
}
let naujas = getvardas();
console.log(naujas);

// 2 uzduotis

function getVardasPavarde(){
    let vardas = "Antanas";
    let pavarde = "Tomauskas";
    console.log(vardas, pavarde);
    return "Jonas Lape";
    
}
let vardpavard = getVardasPavarde();
console.log(vardpavard);

// 3 uzduotis
function getPelnas(){
    let pajamos = 12500;
    let islaidos = 7500;
    let pelnas = pajamos - islaidos;
    return pelnas;
}
let x = getPelnas();
console.log(x);


// 3.2 uzduotis
function getPelnas2(pajamos, nuostoliai){
    let pelnas = pajamos - nuostoliai;

    return pelnas
}
let newpelnas = getPelnas2(1000, 300);
console.log(newpelnas);

// 4 uzduotis
function getPazymiuVidurkis2(x1, x2, x3, x4, x5){
let vidurkis22 = (x1 + x2 + x3 + x4 + x5) / 5;
return vidurkis22;
}
let newvidurkis = getPazymiuVidurkis2(9, 3, 9, 5, 5);
console.log(newvidurkis);

// 5 uzduotis

function getH1ElementoAukstis(){
    let aukstis = document.querySelector('h1').offsetHeight;
    return aukstis;
}
let newheight = getH1ElementoAukstis();
console.log(newheight);

//

function getElementtoAukstis(elementas) {
    let h1aukstis = document.querySelector('h1').offsetHeight;
    let bodyaukstis = document.querySelector('body').offsetHeight;
    x = h1aukstis + bodyaukstis;
    return bodyaukstis;
  }
  console.log("h1 aukstis", getElementtoAukstis("h1"));
  console.log("body aukstis", getElementtoAukstis("body"));
  
// FOR komanda

//

//
 let eglute = "";

 for (i=0; i < 5 ; i++){
    eglute = eglute + "#";
    
    console.log(eglute);
 }
 //IF komanda

//a

 let vardas1 = "Tomas";
 let vardas2 = "Antanas";
 if(vardas1 == vardas2){
    console.log("taip");
 }else{
    console.log("ne");
    
 }
//b

 if(vardas1 = "Tomas"){
    console.log("labas");
    
 } else{
    console.log("bye");
    
 }

 //c

 if(vardas1 == "Tomas" && vardas2 == "Karolis"){
    console.log("labas");
    
 } else{
    console.log("bye");
    
 }
 //d

 if(vardas1 == "Tomas" || vardas2 == "Karolis"){
    console.log("labas");
    
 } else{
    console.log("bye");
    
 }
 // 1 Uzduotis
var age = 24;
if(age < 7){
    console.log("Pliusines varles");
    
}else{
    console.log("bye");
    
 }

 
 
 




// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
//paieska h1, galima ieskoti nav a active, galima #logo ir pakeisti viduje(inner) kazka
// let manoH1 = document.querySelector('h1');
// console.log(manoH1);


// function aaa(){
//     let aukstis = document.querySelector('h1').clientHeight;
//     aukstis.style.height = "500px";
// }
// aaa();

