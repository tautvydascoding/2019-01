let eleHeader = document.createElement("header");
// console.log(eleHeader);

let myText = document.createTextNode("Labas");

eleHeader.appendChild(myText);
// console.log(eleHeader);

let eleH1 = document.querySelector("h1")
let eleAside = document.querySelector("aside")
document.body.insertBefore(eleHeader, eleAside);
