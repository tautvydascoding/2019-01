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
var vardas = "Tomas";
// 1
function setVardas1(name) {
   vardas = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi

function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11

// 2 ------------
function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardas + "2";
}
x =  getVardas2();
console.log(  x );  // isveda: antanas22

// 3---------------------
function setVardas3(name) {
    vardas = name + "3";
}
setVardas3("juozas");            // sugalvoti vis kita zodi

function getVardas3(){
    return vardas;
}
x =  getVardas3();
console.log(  x );  // isveda: juozas33


//---------------------A uzduotis-------------------------------

function getVardas01(){
  let vardas = "Ned Stark";
  console.log("vardas 1", vardas);
}
getVardas01();

function getVardas02(){
  let vardas = "John Snow";
  console.log("vardas 2", vardas);
}
getVardas02();

function getVardas03(){
  let vardas = "Robert Baratheon";
  console.log("vardas 3", vardas);
}
getVardas03();

function getVardas04(){
  let vardas = "Jaime Lannister";
  console.log("vardas 4:", vardas);
}
getVardas04();

function getVardas05(){
  let vardas = "Catelyn Stark";
  console.log("vardas 5:", vardas);
}
getVardas05();

function getVardas06(){
  let vardas = "Cersei Lannister";
  console.log("vardas 6:", vardas);
}
getVardas06();

function getVardas07(){
  let vardas = "Daenerys Targaryen";
  console.log("vardas 7:", vardas);
}
getVardas07();

function getVardas08(){
  let vardas = "Jorah Mormont";
  console.log("Vardas 8:", vardas);
}
getVardas08();

function getVardas09(){
  let vardas = "Viserys Targaryen";
  console.log("vardas 9:", vardas);
}
getVardas09();

function getVardas10(){
  let vardas = "Sansa Stark";
  console.log("vardas 10:", vardas);
}
getVardas10();

function getVardas11() {
  let vardas = "Arya Stark";
  console.log("vardas 11:", vardas);
}
getVardas11();

function getVardas12(){
  let vardas = "Robb Stark";
  console.log("vardas 12:", vardas);
}
getVardas12();

function getVardas13(){
  let vardas = "Theon Greyjoy";
  console.log("vardas 13:", vardas);
}
getVardas13();

function getVardas14(){
  let vardas = "Bran Stark"
  console.log("vardas 14:", vardas);
}
getVardas14();

function getVardas15() {
  let vardas = "Joffrey Baratheon";
  console.log("vardas 15:", vardas);
}
getVardas15();

function getVardas16() {
  let vardas ="The Hound";
  console.log("vardas 16:", vardas);
}
getVardas16();

function getVardas17() {
  let vardas = "Tyrion Lannister";
  console.log("vardas 17:", vardas);
}
getVardas17();

function getVardas18() {
  let vardas = "Khal Drogo";
  console.log("vardas 18:", vardas);
}
getVardas18();

function getVardas19() {
let vardas = "Littlefinger";
console.log("vardas 19:", vardas);
}
getVardas19();

function getVardas20() {
  let vardas = "Davos Seaworth";
  console.log("vardas 20:", vardas);
}
getVardas20();

function getVardas21() {
  let vardas = "Samwell Tarly";
  console.log("vardas 21:", vardas);
}
getVardas21();

function getVardas22(){
  let vardas = "Stannis Baratheon";
  console.log("vardsa 22:", vardas);
}
getVardas22();

function getVardas23() {
  let vardas = "Melisandre";
  console.log("vardas 23:", vardas);
}
getVardas23();

function getVardas24(){
  let vardas = "Jeor Mormont";
  console.log("vardas 24:", vardas);
}
getVardas24();

function getvardas25() {
  let vardas = "Bronn";
  console.log("vardas 25:", vardas);
}
getvardas25();

function getVardas26() {
  let vardas = "Varys";
  console.log("vardas 26:", vardas);
}
getVardas26();

function getVardas27() {
  let vardas = "Shae";
  console.log("vardas 27:", vardas);
}
getVardas27();

function getVardas28(){
  let vardas = "Margaery Tyrell";
  console.log("vardas 28:", vardas);
}
getVardas28();

function getVardas29() {
  let vardas = "Tywin Lannister";
  console.log("vardas 29:", vardas);
}
getVardas29();

function getVardas30() {
  let vardas = "Talisa Maegyr";
  console.log("vardas 30:", vardas);
}
getVardas30();

//-------------------su RETURN f-ja---------------------------------
function getName1() {
  let name = "Gandalf"
  return name + " " + 1;
}
console.log(getName1(name));

function getName2() {
  let name = "Aragorn";
  return name + " " + 2;
}
console.log(getName2(name));

function getName3() {
  let name = "Legolas";
  return name + " " + 3;
}
console.log(getName3(name));

function getName4() {
  let name = "Samwise Gamgee";
  return name + " " + 4;
}
console.log(getName4(name));

function getName5() {
  let name = "Gimli";
  return name + " " + 5;
}
console.log(getName5(name));

function getName6() {
  let name = "Bilbo Baggins";
  return name + " " + 6;
}
console.log(getName6(name));

function getName7() {
  let name = "Peregrin Took";
  return name + " " + 7;
}
console.log(getName7(name));

function getName8() {
  let name = "Boromir";
  return name + " " + 8;
}
console.log(getName8(name));

function getName9() {
  let name = "Meriadoc Brandybuck";
return name + " " + 9;
}
console.log(getName9(name));

function getName10() {
  let name = "Galadriel";
  return name + " " + 10;
}
console.log(getName10(name));

function getName11() {
  let name = "Faramir";
  return name + " " + 11;
}
console.log(getName11(name));

function getName12() {
  let name = "Elrond";
  return name + " " + 12;
}
console.log(getName12(name));

function getName13(){
  let name = "Treebeard";
  return name + " " + 13;
}
console.log( getName13(name));

function getName14() {
  let name = "Frodo Baggins";
  return name + " " + 14;
}
console.log(getName14(name));

function getName15() {
  let name = "Gollum";
  return name + " " + 15;
}
console.log(getName15(name));
