<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.genres.php";
  $listGenres = Genres::afficheGenres();
  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
  require "src/php/view/view.genre.list.php";
  require "src/php/view/view.genre.1.php";
  //End Content
require "src/php/view/view.footer.php";

?>