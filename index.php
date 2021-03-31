<?php
//bienvenue dans spaghetti-land YAY
parse_str($_SERVER["QUERY_STRING"], $qs);
$keys = array_keys($qs); // grab 'em all, if any
$route = array_shift($keys); // first one

  switch ($route){
    case "genres":
      include("src/php/controller/control.genres.php");
    break;

    case "styles":
      include("src/php/controller/control.styles.php");
    break;

    case "artists":
      include("src/php/controller/control.artists.php");
    break;

    case "licence":
      include("src/php/controller/control.licence.php");
    break;

    default:
      include("src/php/controller/control.accueil.php");
    break;
  }

  exit;
