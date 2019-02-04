// uzduotis 0

let masyvas = [];
let min = 10;
let max = 100;

// uzduotis1
// console.log(Math.floor(Math.random() * (max-10)) + min);


for (let i = 0; i < 60; i++) {
  masyvas.push(Math.floor(Math.random() * (max-10)) + min);
}
console.log(masyvas);

// 2 UZDUOTIS:
let tikimybe;
let x = -1;

for (let i = 0; i < masyvas.length; i++) {
  tikimybe = Math.random();
  if (tikimybe < 0.1) {
    masyvas.splice(i, 1, masyvas[i] * x)
  }
}
console.log(masyvas);

// 3 UZDUOTIS:

for (let i = 0; i < masyvas.length; i++) {
  if (masyvas[i] < 0) {
    masyvas.splice(i, 1, masyvas[i] * x)
  }
}

console.log(masyvas);


















//
