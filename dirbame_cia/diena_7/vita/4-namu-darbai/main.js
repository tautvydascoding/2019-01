console.log(   " mano js failas "  );

// UZDUOTIS =======ismokti f-jas 50x===============
// Aptrasymas) sukurti 30 getVardas ir 30 setVardas(x) f-ju. Jas iskviesti eiles tvarka "maisant" poruojant pvz:
// setVardas1("Antanas");
// getVardas1();
// setVardas2("Juozas");
// getVardas2();
// A) sukurti (gloabalu) kintamaji pvz:
//      var vardas =  "Tomas";
// B) sukurti 20-30 f-ju:  getVardas1(), getVardas2(), getVardas3(), ...getVardas30()
// kurios  turi "return" ir iskvietus f-ja ji  grazina varda ir prideti skaiciu salia  pvz: "Tomas1", Antanas22, Juozas33
// B) sukurti 20-30 f-ju:   setVardas1(name), setVardas2(name), ... setVardas30(name),...
// kurios   turi pakeisti varda ir prideti skaiciu salia
// C) visas f-jas iskviesti
// pvz.:

// A)
var vardas = "Tomas";
function setVardas1(name) {
   vardas = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi

function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11
////////////////////////////////
var vardas4 = "Lina";
function setVardas4(name){
  vardas4 = name + "1";
}
setVardas4("Lina");

function getVardas4(){
  return vardas4 + "1";
}
var x = getVardas4();
console.log(  x );
//////////////////////////////////

var vardas5 = "Saule";
function setVardas5(name){
  vardas5 = name + "1";
}
setVardas5("Saule");

function getVardas5(){
  return vardas5 + "1";
}
var x = getVardas5();
console.log( x );
////////////////////////////////

var vardas6 = "Laura";
function setVardas6(name){
  vardas6 = name + "3";
}
setVardas6("Laura");

function getVardas6(){
  return vardas6 + "3";
}
var x = getVardas6();
console.log(x);

//////////////////////////////

var vardas7 = "Giedre";
function setVardas7(name){
  vardas7 = name + "4";
}
setVardas7("Giedre");

function getVardas7(){
  return vardas7 + "4";
}
var x = getVardas7();
console.log(x);
//////////////////////////////

var vardas8 = "Lukas";
function setVardas8(name){
  vardas8 = name + "5";
}
setVardas8("Lukas");
function getVardas8(){
  return vardas8 + "5";
}
var x = getVardas8();
console.log(x);
/////////////////////////////

var vardas9 = "Ausra";
function setVardas9(name){
  vardas9 = name + "6";
}
setVardas9("Ausra");

function getVardas9(){
  return vardas9 + "6";
}
var x = getVardas9();
console.log(x);
/////////////////////////////

var vardas10 = "Neringa";
function setVardas10(name){
  vardas10 = name + "7";
}
setVardas10("Neringa");
function getVardas10(){
  return vardas10 + "7";
}
var x =getVardas10();
console.log(x);
//////////////////////////

var vardas11 = "Nida";
function setVardas11(name){
  vardas11 = name + "8";
}
setVardas11("Nida");
function getVardas11(){
  return vardas11 + "8";
}
var x = getVardas11();
console.log(x);
////////////////////////////
// B)
function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardas + "2";
}
x =  getVardas2();
console.log(  x );  // isveda: antanas22
//////////////////////////////////////

function setVardas12(name){
  vardas12 = name + "9";
}
setVardas12("Zigmas");
function getVardas12(){
  return vardas12 + "9";
}
x = getVardas12();
console.log(x);
///////////////////////////////////

function setVardas13(name){
  vardas13 = name + "10";
}
setVardas13("Gintaras");
function getVardas13(){
  return vardas13 + "10";
}
x = getVardas13();
console.log(x);
/////////////////////////////////

function setVardas14(name){
  vardas14 = name + "11";
}
setVardas14("Vytas");
function getVardas14(){
  return vardas14 + "11";
}
x = getVardas14();
console.log(x);
//////////////////////////////

function setVardas15(name){
  vardas15 = name + "12";
}
setVardas15("Urte");
function getVardas15(){
  return vardas15 + "12";
}
x = getVardas15();
console.log(x);
//////////////////////////////

function setVardas16(name){
  vardas16 = name + "14";
}
setVardas16("Migle");
function getVardas16(){
  return vardas16 + "14";
}
x = getVardas16();
console.log(x);
///////////////////////////////
function setVardas17(name){
  vardas17 = name + "15";
}
setVardas17("Augis");
function getVardas17(){
  return vardas17 + "15";
}
x = getVardas17();
console.log(x);
//////////////////////////////
// C) visas f-jas iskviesti
function setVardas3(name) {
    vardas = name + "3";
}
setVardas3("juozas");            // sugalvoti vis kita zodi

function getVardas3(){
    return vardas;
}
x =  getVardas3();
console.log(  x );  // isveda: juozas33
/////////////////////////////

function setvardas18(name){
  vardas18 = name + "16";
}
setvardas18("Sonata");
function getVardas18(){
  return vardas18;
}
x = getVardas18();
console.log(x);
