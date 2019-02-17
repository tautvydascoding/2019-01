<?php
  require_once("db-funkcijos.php");
  $title = $_GET["title"];
  $subtitle = $_GET["subtitle"];
  $textas = $_GET["textas"];
  updatePradinis($title, $subtitle, $textas);
?>
