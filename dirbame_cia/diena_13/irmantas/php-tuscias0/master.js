
let preke1 = ["1", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 149];

let preke2 = ["2", "balionas.png", "Pats lengviausias balionas!", 12];

let preke3 = ["3", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 55];

let preke4 = ["4", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 53];

let preke5 = ["5", "balionas.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 57];

let preke6 = ["6", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 86];

// let preke7 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
//
// let preke8 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
//
// let preke9 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
//
// let preke10 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
//
// let preke11 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
//
// let preke12 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
//
// let preke13 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
let visosPrekes = [preke1, preke2, preke3, preke4, preke5, preke6];
let virsKaina100 = [];


function rusiuotiPagalKaina() {
  for (let i = 0; i < visosPrekes.length; i++) {
    for (let j = 0; j < visosPrekes.length; j++) {
      if (visosPrekes[i][3] < visosPrekes[j][3]) {
        let xPreke = visosPrekes[j];
        visosPrekes[j] = visosPrekes[i];
        visosPrekes[i] = xPreke;
      }
    }
  }
}


rusiuotiPagalKaina();
console.log(visosPrekes);

function filtras100() {
  for (let i = 0; i < visosPrekes.length; i++) {
    if (visosPrekes[i][3] > 100) {
      virsKaina100.push(visosPrekes[i]);
    }
  }
}

filtras100();
console.log(virsKaina100);












let rowNum = 0;

function addRow() {
  rowNum++;
  document.querySelector(`body`).innerHTML += `<div class="row p-${rowNum}"></div>`;
}

for (var i = 0; i < visosPrekes.length; i++) {
  let pic = visosPrekes[i][1];

  if (Number.isInteger(i/3) || i === 0) {
    addRow();
  }
  document.querySelector(`.p-${rowNum}`).innerHTML += `<div class="col-4"><img src="img/${pic}" width="50%"></div>`;
}





















































//
