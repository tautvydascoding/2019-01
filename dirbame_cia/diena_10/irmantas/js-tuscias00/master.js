//Uzduotis1

let darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
let darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
let darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
let visiDarbuotojai = [darbuotojas1, darbuotojas2, darbuotojas3];
// console.log(visiDarbuotojai);

//1.1)

// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   console.log(visiDarbuotojai[0][i].toString());
// }

//1.2)

// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   console.log(visiDarbuotojai[i][0].toString());
// }

//1.3)????????????????????????????????????????????????????
//
// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   console.log(visiDarbuotojai[i][0].toString());
//   console.log(visiDarbuotojai[i][1].toString());
//   console.log(visiDarbuotojai[i][2].toString());
//   console.log(visiDarbuotojai[i][3].toString());
// }

//1.4)

// for (var i = 0; i < visiDarbuotojai.length; i++) {
//   for (var j = 0; j < visiDarbuotojai[0].length; j++) {
//     console.log(visiDarbuotojai[i][j])
//   }
// }

// console.log(visiDarbuotojai[0].length);

//Uzduotis 2
// a

let preke1 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke2 = ["Balionas", "balionas.png", "Pats lengviausias balionas!", 102];

let preke3 = ["Fotelis2", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 50];

let preke4 = ["Fotelis2", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 50];

let preke5 = ["Fotelis2", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 50];

let preke6 = ["Fotelis2", "6.png", "Dar geresnis fotelis pasaulyje, uz dar mazesne kaina!", 50];

let preke7 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke8 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke9 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke10 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke11 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke12 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];

let preke13 = ["Fotelis", "5.jpg", "Pats geriausias fotelis pasaulyje, uz pacia maziausia kaina!", 152];
let visosPrekes = [preke1, preke2, preke3, preke4, preke5, preke6, preke7, preke8, preke9, preke10, preke11, preke12, preke13];
//b
//c)



// for (var i = 0; i < visosPrekes.length; i++) {
//   let pic = visosPrekes[i][1];
//
//   document.querySelector(".prekes").innerHTML += `<div class="col-4"><img src="img/${pic}" width="50%"></div>`
//
// };

// <div class="card" style="width: 18rem;">
//   <img src="..." class="card-img-top" alt="...">
// </div>





// function addPic() {
//   let pic = document.querySelector(".prekes")
// }
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
