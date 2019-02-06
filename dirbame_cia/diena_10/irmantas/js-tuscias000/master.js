//1Uzduotis

let mokinys = {
  vardas: "Jurgis",
  pavarde: "Jurgauskas",
  kelintokas: 7,
  matematikos_pazymiai : [6, 5, 9 , 10, 8]
}

console.log(mokinys);

mokinys.kelintokas += 1 ;

for (var i = 0; i < mokinys.matematikos_pazymiai.length; i++) {
  mokinys.matematikos_pazymiai[i] = 6;
}

console.log(mokinys);

mokinys.begu = function () {
  console.log("Begu, begu");
}

mokinys.begu();

mokinys.miestas = "Kaunas";

console.log(mokinys);








































//
