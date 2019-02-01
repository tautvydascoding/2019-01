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

function print(a, b, c){
document.querySelector("body").innerHTML = " " + "<article>" + a + "</article>" + " ";
document.querySelector("article").innerHTML += (" " + "<article> b </article>" + " ");
document.querySelector("article").innerHTML += (" " + "<article> c </article>" + " ");
document.querySelector("article").innerHTML += "<span>masinos metai: ...  Rida: ... </span>" + "<br>" ;
document.querySelector("article").innerHTML += "<button>masinos kaina</button>"  ;

}
print(as, tu, jis);

///Masyvu metodai

function printDuomenys(){
    var vardas = "Tomas";
    
    console.log();
    
}
printDuomenys();










