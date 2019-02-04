console.log(   " mano js failas "  );


let miestai = [
                21230,
                -999,
                13,
                7,
                'Alytus',
                'Marijampole',
                7,
                'Kaunas',
                'Palanga',
                'Klaipeda'
            ];
console.log(  miestai );


console.log(  miestai.toString()   );
console.log(  miestai.join( "   ")   );
miestai.push("Vilnius");   // i masyvo gala idedame "Vilnius"
miestai.push("Telsius");   // i masyvo gala idedame "Vilnius"
console.log( "po idejimo:",      miestai.join( "   ")   );

miestai.pop();  // pasalina paskutinta masyvo elementa/stalciu
console.log( "po pasalinimo:",      miestai.join( "   ")   );

miestai.unshift("Vilkaviskis");   // idedame reiksme i masyvo priekis
console.log( "po idejimo i prieki:",      miestai.join( "   ")   );

miestai.shift();   // istrinimas is prieskio
console.log( "po istrinimo:",      miestai.join( "   ")   );
//
miestai.sort(  function(a, b){return a - b}   );  //
console.log( "po susikiavimo:",      miestai.join( "   ")   );


delete  miestai[7];   // istrinimas is prieskio
console.log( "po istrinimo 7 index:",      miestai   );
//

miestai.splice(6, 2, "Naujoji Akmene","Naujoji Silute");
console.log( "po istrinimo 6 ir 7:",      miestai   );

miestai.splice(1, 0, "Naujasis Kaunas");
console.log( "po iterpimo i 1 index",      miestai   );

let x = miestai;
console.log( "kopija:", x);
console.log( "orginalas:", miestai);

miestai.shift(); // istrini 0 elementa/stalciu
console.log( "kopija po istrynimo:", x);
console.log( "orginalas po istrynimo:", miestai);

let y = miestai.slice(5, 8); // tikra kopija nuo 5 iki 8 (8 neiskait)
console.log( "kopija nuo 5 iki 8:", y);
let visaKopija = miestai.slice(       0  ); // tikra kopija nuo 0 iki galo
console.log( "kopija visa:", visaKopija);
//
//-----------------------------------FOR aray-----------
for (var i = 0; i < 11; i++) {
    console.log(   miestai[i]  );
}
