console.log(   " mano js failas "  );

let pavardes = [ 'Tomauskis', 'Arlauskas', 'Zuokas'];
console.log( pavardes [0] );
console.log( pavardes [0], pavardes [1], pavardes [2]  );

//pridedam papildoma

pavardes[3] = "Kalnietis";
console.log( pavardes [3] );

// pakeiciam pavardes
pavardes [0] = "Tomauskiene";
console.log("po pakeitimo", pavardes [0] );

//pasitikrinimui
console.log( pavardes ); // sprendziant uzdavinius nesuveiks

console.log( pavardes.length );

let vardai = [];
vardai[0] = "Paulius";
vardai[1] = "Giedrius";
vardai[2] = "Lukas";
vardai[3] = "Vytautas";

console.log( vardai );
vardai[0] = "Irena";
console.log( vardai );
