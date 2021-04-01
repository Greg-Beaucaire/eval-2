<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.artists.php";
  require "src/php/model/model.styles.php";

    //Affichage de la liste des artistes
    $listStyles = Styles::afficheStyles();
    $listArtists = Artists::afficheArtists();

    //Ajout d'artiste 
    if(isset($_POST['select_artist_add_submit'])){
      Artists::addArtists($_POST['artist_name_add'], $_POST['artist_style_add']);
      header('Location: ?artists');
    }
  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
  require "src/php/view/view.artists.list.php";
  if(!isset($_POST['select_artist_submit'])){
    require "src/php/view/view.artists.1.php";
  }
  if(isset($_POST['select_artist_submit'])){
    if($_POST['select_artist'] == 'select_artist_add'){
      require "src/php/view/view.artists.add.php";
    }
  }
  //End Content
require "src/php/view/view.footer.php";

?>