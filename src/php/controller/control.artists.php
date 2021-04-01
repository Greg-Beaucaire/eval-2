<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.artists.php";
  require "src/php/model/model.styles.php";

    // Affichage de la liste des artistes
    $listStyles = Styles::afficheStyles();
    $listArtists = Artists::afficheArtists();

    // Ajout d'artiste 
    if(isset($_POST['select_artist_add_submit'])){
      Artists::addArtists($_POST['artist_name_add'], $_POST['artist_style_add']);
      header('Location: ?artists');
    }

    // Modifier un artiste

    if(isset($_POST['artist_mod_submit'])) {
      Artists::updateArtist($_POST['artist_id_mod'], $_POST['artist_name_mod']);
      header('Location: ?artists');
    }

    // Supprimer un artiste
    if(isset($_POST['select_artist_supr_submit'])) {
      Artists::deleteArtist($_POST['artist_id_supr']);
      header('Location: ?artists');
    }

    // Lier un style et un artiste
    if(isset($_POST['select_artist_style_add_submit'])){
      Artists::linkArtistStyle($_POST['select_style_artist_add'], $_POST['select_artist_style_add']);
      header('Location: ?artists');
    }

    // Enlever un style à un artiste
    if(isset($_POST['select_artist_style_supr_final_submit'])) {
      Artists::unlinkArtistStyle($_POST['select_artist_style_supr_final'], $_POST['select_artistId_style_supr_final']);
      header('Location: ?artists');
    }
  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
    require "src/php/view/view.artists.list.php";
    if(!isset($_POST['select_artist_submit']) && !isset($_POST['select_artist_mod_submit']) && !isset($_POST['select_artist_style_supr_submit'])) {
      require "src/php/view/view.artists.1.php";
    }

    if(isset($_POST['select_artist_submit'])) {
      // Ajouter un artiste
      if($_POST['select_artist'] == 'select_artist_add') {
        require "src/php/view/view.artists.add.php";
      }

      // Modifier un artiste part 1
      if($_POST['select_artist'] == 'select_artist_mod') {
        require "src/php/view/view.artists.mod.php";
      }

      // Supprimer un artiste part 1
      if($_POST['select_artist'] == 'select_artist_del'){
        require "src/php/view/view.artists.supr.php";
      }

      // Ajouter un style à un artiste
      if($_POST['select_artist'] == 'select_style_artist_add'){
        require "src/php/view/view.artists.style.add.php";
      }

      // Enlever un style à un artiste part 1
      if($_POST['select_artist'] == 'select_style_artist_del'){
        require "src/php/view/view.artists.style.supr.php";
      }
    }

    // Modifier artiste part 2 
    if(isset($_POST['select_artist_mod_submit'])) {
      $artistId = Artists::artistById($_POST['artist_id_mod']);
      require "src/php/view/view.artists.mod.2.php";
    }

    // Enlever un style à un artiste part 2
    if(isset($_POST['select_artist_style_supr_submit'])) {
      require "src/php/view/view.artists.style.supr.2.php";
    }
    
  //End Content
require "src/php/view/view.footer.php";

?>