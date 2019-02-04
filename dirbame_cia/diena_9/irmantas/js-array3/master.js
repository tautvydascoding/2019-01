// let masyvas100for = [];
//
// for (var i = 0; i < 100; i++) {
//   masyvas100for.push(i);
// }
// console.log(masyvas100for);
//
// let masyvas100while = [];
// let j = 0;
// while (j < 100) {
//   j++;
//   masyvas100while.push(j);
// }
// console.log(masyvas100while);
//
//
//
//
// //
// //1A)
//
// function printSk (sk=-1) {
//   console.log(sk);
// };
//
// for (var i = 0; i < 20; i++) {
//   printSk(2);
// }
// //1B)
//
// let z = 0;
// while (z < 100) {
//   z++;
//   console.log(z);
//   if (z === 10) {
//     break;
//   }
// }
//
// ////////////////////////
//
// let skaiciai = [];
//
//
// for (var i = 0; i < 50; i++) {
//   skaiciai.push(Math.floor(Math.random() * 100));
// }
//
// console.log(skaiciai.toString());

// ——————————— Object ————————————————

let worker1 = {
  vardas : "Antanas",
  pavarde : "Tomauskas",
  amzius : 22,
  "pagamintu detaliu skaiciu" : 1543
}

let worker2 = {
  vardas : "Paulius",
  pavarde : "Paulauskas",
  amzius : 39,
  "pagamintu detaliu skaiciu" : 500
}

let worker3 = {
  vardas : "Tominis",
  pavarde : "TMS",
  amzius : 65,
  "pagamintu detaliu skaiciu" : 986
}

// console.log(worker1);

let workers = [worker1, worker2, worker3];

console.log(workers);

let x;
for (var i = 0; i < workers.length; i++) {
  for (let x in workers[i]) {
    console.log(workers[i][x]);
  }
}

function printArrayOfObjects () {
  for (var i = 0; i < workers.length; i++) {
    console.log(workers[i]);
  }

};

printArrayOfObjects ();














































//
