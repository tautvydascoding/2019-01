console.log("my js failas");
let sk = 2019;
console.log("skaicius yra", sk);
sk = 2020; // pakeitem reiksme
console.log("skaicius yra", sk);
sk = sk + 1;
console.log("skaicius yra", sk);
sk = sk + sk;
console.log("skaicius yra", sk);

// sukurti 3 kintamuosiu x,y,z;
// z ir y priskirti reiksmes(inicilizuoti)
// uzduotis - apskaiciuoti suma

let x = 5;
let y = 2;
let z = 1;
let sum;
sum = x + y + z;
console.log("suma yra", sum);

let atlyginimas = 890;
let psd = atlyginimas * 0.09;
let vsd = (atlyginimas * 0.5) * 0.24;
let atlyginimasIRankas = atlyginimas - psd - vsd;
console.log("Atlyginimas į rankas:", atlyginimasIRankas);
