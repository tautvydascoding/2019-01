//0 uzduotis
//a)

var vardas1 = "Tomas";
var vardas2 = "Antanas";
if(vardas1 == vardas2){
    console.log("sutapo");
    
}else{
    console.log("nestapo");
    
}
//b
if(vardas1 == "Tomas"){
    console.log("Labas");
    
}else{
    console.log("bye");
    
}
//c
if(vardas1 == "Tomas" && vardas2 == "Karolis"){
    console.log("sutapo");
    
}else{
    console.log("nestapo");
    
}
//d
if(vardas1 == "Tomas" || vardas2 == "Antanas"){
    console.log("sutapo");
    
}else{
    console.log("nestapo");
    
}
//1 uzduotis

var age = 69;
if(age <= 7){
    console.log("Pliusines varles");
    
}else if(7 <= age && age <= 14){
    console.log("Mini telefonai");
    
}else if(14 < age && age <= 18){
    console.log( "new Music App");

}else if(18 <= age && age <= 24){
    console.log( "Stok i sauliu sajunga");
    
}else if(24 <= age && age <= 65){
    console.log("Pensijos kaupimas - zusiregistruok");
    
}else{
    console.log("kelione i Bristona");
    
}
//2 uzduotis
var vard1 = "Tomas";
var vard2 = "Paulius";
var vard3 = "Airidas";
var klientovardas;
if(klientovardas == vard1){
    console.log("Masinoms 10% nuolaida");
    
}else if(klientovardas == vard2){
    console.log("Buitinei technikai  30% nuolaida");
    
}else {
    console.log("5% nuolaida kelionems");
    
}
//3 uzduotis
var tipas1 = "bronze";
var tipas2 = "silver";
var tipas3 = "gold";
var klientoTipas;

if(klientoTipas == "bronze"){
    console.log(" 15% nuolaida");
    
}else if(klientoTipas == "silver"){
    console.log(" 30% nuolaida");
    
}else {
    console.log("5% nuolaida kelionems");
    
}
//Loop
//1 uzduotis
function azuolas() {
    let eilute = "";
    for (var i = 0; i < 50; i++) {
      eilute = "Azuolas" + i;
      
        }
        console.log(eilute);
    }
    
    azuolas();
//1.1 uzduotis

document.write("<h3> Azuolas </h3>");

//1.2
document.querySelector("article").innerHTML = " <h2> Azuolas</h2>";
var zodis = "";

function azuolas50(){
    for(var i = 0; i < 10; i++){
        document.querySelector("article").innerHTML += " <h2> Azuolas</h2>";
        
    }
    
    document.write(zodis);
}
    azuolas50();

//1.3

function elem(){
    for(var i = 0; i < 6; i++){
        document.querySelector("ul").innerHTML += " <li> elementas1</li>"
    }
}
elem();

//1.4
function header(x){
    for(var i = 0; i < 10; i++){
        document.querySelector("header").innerHTML += " <p> aprasymas + x </p>";
    }
}
header();



    //2.1


function printx(x){
    
for(i = 0; i <= 10; i++){
    document.querySelector("header").innerHTML += (x) + i + "<br>";


    }
}
printx("kjhjh");
//2.3
function printxxx(kiekis){
    for(let i =0; i < kiekis ; i++){
        zodis = "zodis" + i;
        console.log(zodis);
    
    document.write('<img src="./portretai2.jpg" alt="">');
    }
    
}
printxxx(2);

// 4 uzduotis

function piestiEilute(x){
    for(let i =0; i < x ; i++){
        str = "-";
        document.write(str);
    }
}

function spausdintiStulpeli(y){
   
    for(let i =0; i < y ; i++){
        document.write(" Vardas |");
    }
}
piestiEilute(16);
document.write("<br>");
spausdintiStulpeli(4);
document.write("<br>");
piestiEilute(16);





