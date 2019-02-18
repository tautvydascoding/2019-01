console.log(   " mano js failas "  );
// alert ("connected!!")

//makes li elements change color when hover over (playground rules)

var lis = document.querySelectorAll("li");

for (var i = 0; i < lis.length; i++) {
lis[i].addEventListener("mouseover", function(){
  this.style.color="rgb(15, 89, 23)";
});
lis[i].addEventListener("mouseout", function(){
  this.style.color="rgb(73, 61, 83)";
});
}

var par = document.querySelectorAll("p");

for (var i = 0; i < lis.length; i++) {
par[i].addEventListener("mouseover", function(){
  this.style.color="rgb(26, 86, 191)";
});
par[i].addEventListener("mouseout", function(){
  this.style.color="rgb(73, 61, 83)";
});
}
