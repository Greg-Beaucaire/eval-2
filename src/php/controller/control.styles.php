<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.styles.php";
  $listStyles = Styles::afficheStyles();
  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
  require "src/php/view/view.styles.list.php";
  require "src/php/view/view.styles.1.php";
  //End Content
require "src/php/view/view.footer.php";

?>