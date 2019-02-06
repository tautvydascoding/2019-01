console.log("mano js failas");

// $("h1").hide(3000);  //1000 = 1sekundei letai isnyksta h1 tekstas ekrane
//
// $("h1").show(2000);  //1000 = 1sekundei letai atsiranda h1 tekstas ekrane

$("h1").click(function(){
  $("p").toggle(2000); // paspaudus ant h1 isnyks p, dar karta paskaudus atsiranda p
});//ant h1 uzdedam veiksma click. Kai useris paspaus su pelyte ant h1, ivyks visas suprogramuotas kodas. Jei vietoj "h1" nurodyt "body", tai tada p tekstas dings pelyte paspaudus bet kurioje body vietoje.


//kaip pakeisti kursoriu (pelytes zenkla), is rodykles i rankyte, kai uzvedi ant h1 teksto:
$("h1").mouseenter(function(event){
    $("h1").css("cursor", "pointer");
});

let manoH1 = $("h1"); // susikuriame kintamaji, kad tik viena kart reiktu ieskoti jo
$("h1").mouseenter(function(event){
    manoH1.css("cursor", "pointer");
    manoH1.css("color", "blue");
    manoH1.css("background-color", "yellow");
    manoH1.css("font-size", "10px");
});

// galima daug css komandu surasyti kaip javascript objekta. Ir ji galima bus naudoti daug kartu skirtingose vietose

let manoCSS = {                //cia yra OBJEKTAS. Google jQuery CSS object
      "cursor": "pointer",
      "color": "blue",
      "background-color": "yellow",
      "font-size": "10px"
};

// kaip objekta panaudoti:

$("p").css( manoCSS );  // ta pati efekta panaudojom ir p elementams. Kodas veikia HTML faile - jQuery visiems p uzdejo "Style = ", kas yra labai stipru, nes style yra 1000 stiprumo.

$("p").click(function(){
  $("p").css (manoCSS);
});


// TEORIJA
// //Execute the function when the DOM is ready to be used.
// $(function() {
//     // Document is ready
// });

// jQuery(function( $ ) {
//     // Your code using failsafe $ alias here...
// });

// //=============css===============
//$( "article > p" ).css( "border", "1px solid gray" ); visi article vaikai <p> pasikeis.

// // arba

 //var myCSS = {
  //   "border": "1px solid gray",  //deti i kabutes
  //   "color": "red"
// };
// $( "article > p" ).css( myCSS );

// // advance: get curent width and height
// // $( 'p' ).css(
// //     {
// // 	  width: function( index, value ) {
// // 		console.log("curent width:" + value);
// // 		return parseFloat( value ) * 1.2;
// // 	  },
// // 	  height: function( index, value ) {
// // 		console.log("curent height: " + value);
// // 		return parseFloat( value ) * 1.2;
// //   }
// // });
// // //=============selectors kaip CSS=========

// // keliu elementu select'as (select h1 and h2 elements)
// $( "h1, h2" ).css( "background", "black" );
// $( "h1" ).css("color", "black").add( "h2" ).css( "background", "yellow" );
// fonas ir h2 ir h1 geltonas, o tekstas juodas bus tik h1.

// // paveiks paskutini is li elementu
// $( "li" ).last().css( "background", "yellow" );
// // $( "li:last" ).addClass( "selected highlight" );

// $( "p:even" )
// //$( "p:eq(1)" ); // pirmas

// // $( "h1", "form" ).addClass( "bar" );
// // !!! importnat sekantis parametras nurodo kur ieskoti. pvz ^ h1 bus ieskomas TIK form'os viduje !!!

// // more complex  - antras .css() suveiks abiems elementams (h1 ir h2)
// // $( "h1" ).css( "font-size", "8px" ).add( "h2" ).css( "background", "yellow" );

// // veiksmus atlieka surasyta tvarka
// $( "header" ).css( "color", "red" ).find( "h1" ).css( "color", "green" );  // note: find(...) - iesko elemento viduje selected item

// // form'os lauku select'as
// $( "input[type='email']").val("Username");    // will return the current real value of a text field, for example if the user typed something there after a page load.
// // note: $("input[type='email']").attr('value') // will return value from DOM/HTML.

// // brolius ir seses Isskyrus h2 pati

// $("body h2").siblings().css({"color": "red", "border": "2px solid red"});

// h2 brolius kurie yra "p", bet nera h2 ar kiti
// $("h2").siblings("p").css({"color": "orange", "border": "2px solid red"});
// sekanti brolini elementa
// $("h2").next().css({"color": "red", "border": "2px solid red"});
// $("h2").nextAll();
// $("h2").nextUntil("h6"); // !!! tik su elementais, su class
