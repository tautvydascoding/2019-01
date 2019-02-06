// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)

$("h1, h2").css("color", "blue");
$("h2:even").css("color", "red");
$("li:not(.reklama)").css("color", "yellow");
$("li:last").css("color", "green");

$("input[name=pastas]").css("background-color", "pink");

$("input[name=pastas]").on("mouseenter", () => {
  $("input[name=pastas]").css("background-color", "red").on("mouseleave", () => {
    $("input[name=pastas]").css("background-color", "pink")
  })
})
