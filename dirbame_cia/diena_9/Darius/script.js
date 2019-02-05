let name = "tomas",
    lastname = "Ruzgys",
        age = "21";

let tekstas = "ilgas  tekstas \
bkjbkj kjb jkkhkj"; //ilgas tekstas, kuris tesiasi per keliaseilutes//

x = name * age;
console.log(x);
for (let i = 0; i < 5; i++) {
    console.log(i);
    
    
}
function suma(x = -99, z = -99){
    let suma = x + z;
    if(suma > 0){
        console.log(suma);
    }else{
        console.log("klaida");
        
    }
}
suma();
///Masyvai

var prekiautojai = ["Senukai", "Maxima", "Iki", "Rimi"];
console.log(prekiautojai);
prekiautojai[1] = "Ir Ko";
console.log(prekiautojai);
//pakeitimas masyvo elementu
let temp = prekiautojai[1];
prekiautojai[1] = prekiautojai[2];
prekiautojai[2] = temp;
console.log(prekiautojai);

//masyvo pakeitimas su funkcija
function pakeitimas(x,y){
    var prekiautojai = ["Senukai", "Maxima", "Iki", "Rimi"];
    let temp = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = temp;
    console.log(prekiautojai);
}
pakeitimas(0,1);
// 2 uzduotis array

let car =["audi", 57000, 1000];
console.log(car);
car[2] += 100;
console.log(car);
rida = car[1] + (-50000);
car[1] = rida;
console.log(car);
car.push("Savininko vardas 'Tomas'");
console.log(car);
car.push("masinos metai '2004'");
console.log(car);
//sunkesne

document.querySelector("body").innerHTML = ("<article> Awesome </article>");
document.querySelector("article").innerHTML += ("<h2>pavadinimas</h2>");
document.querySelector("article").innerHTML += ("<div>savininko vardas :</div>");
document.querySelector("article").innerHTML += "<span>masinos metai: ...  Rida: ... </span>" + "<br>" ;
document.querySelector("article").innerHTML += "<button>masinos kaina</button>"  ;

// function print(a, b, c){
// document.querySelector("body").innerHTML = " " + "<article>" + a + "</article>" + " ";
// document.querySelector("article").innerHTML += (" " + "<article> b </article>" + " ");
// document.querySelector("article").innerHTML += (" " + "<article> c </article>" + " ");
// document.querySelector("article").innerHTML += "<span>masinos metai: ...  Rida: ... </span>" + "<br>" ;
// document.querySelector("article").innerHTML += "<button>masinos kaina</button>"  ;

// }
// print(as, tu, jis);

///Masyvu metodai Uzduotis 3 Array.js

var miestai = ["Alytus", "Kaunas","Vilnius", "Palanga", 123, -999, 5,9 ];
console.log(miestai);

console.log(miestai.toString());
console.log(miestai.join(".")); //nurodo kaip atskirti masyvo elementus, db taskas
miestai.push("Birzai"); // prideda elementa i masyvo gala
console.log(miestai);
miestai.pop(); // pasalina paskutini elementa is masyvo
console.log("po istrynimo", miestai.join(" "));
miestai.unshift("Vilkaviskis"); //ideda i prieki
console.log("po idejimo i prieki:", miestai.join(" "));
miestai.shift(); // istrina is priekio
console.log(miestai.join(" "));
miestai.sort(); //surikiuoja, o skaiciams rikiuoti reikia i i sort((function(a, b){return a - b}));
console.log("po surikiavimo:", miestai.join(" "));

delete miestai[3]; //istrina
console.log("po istrynimo delete", miestai);

//Splice

// mass.splice(2 -(nuo kur), 1 -(kiek istrinti), "tom" - (ka iterpti), "kaunas" - (ka iterpti));

miestai.splice(6, 2, "Akmene", "Silute"), // nuo 6 elem 2 istrynem ir idejom du miestus
console.log(miestai.join(" "));
miestai.splice(1, 0, "as"); // iterpimas nieko neistrinant
console.log(miestai.join(" "));

//kopija
let m = miestai;        //objektai ir masyvai kopijuoja adresus
console.log(m);
m.splice(0, 1);
console.log("kopija", m);
console.log("originalas", miestai);

//Slice

let abc = miestai.slice(5, 8); // nusikopijuoti masyvo stalcius nuo 5 iki 8;
console.log("kopija nuo 5 iki 8", abc);

let visakopija = miestai.slice(0, miestai.length); // visa kopija
console.log("visa kopija", visakopija);

//uzduotis
    
//1.
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
keliautojas.splice(keliautojas.length, 0, "butelis vandens");
console.log(keliautojas);
//2.
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

//3.
keliautojas.splice(3,1);
console.log(keliautojas);

// geresni uzdaviniai
//4.
function kurti(nulis){
    let masyvas50 = [];
    for (let i = 0; i < 50; i++) {
        masyvas50.unshift(nulis);
    
    }
    console.log(masyvas50);
}
kurti(0);

//5.1
function kurti5(vienas){
    let masyvas50 = [];
    var i = 0;
    do{
        masyvas50.unshift(vienas);
        i++;
    }
    while( i < 50){
    }
    console.log(masyvas50);
}
kurti5(1);

//


function kurtikasantra(vienasss, hhk){
    let masyvas50 = [];
    for (let i = 0; i < 50; i++) {
        masyvas50[i] = 1;
        if(i % 2){
            masyvas50[i] = 3;
        }
    }
    console.log(masyvas50);
}
kurtikasantra(1);

// kas penktas pakeisti i 9
function kurtikaspenktas(vienasss){
    let masyvas50 = [];
    for (let i = 0; i < 50; i++) {
        masyvas50[i] = 1;
        if(i % 5 == 0){
            masyvas50[i] = 9;
        }
    }
    console.log(masyvas50);
}
kurtikaspenktas(1);



















