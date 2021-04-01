<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.genres.php";
  $listGenres = Genres::afficheGenres();

  // Ajouter un genre
  if(isset($_POST['genre_add_submit'])){
    Genres::addGenre($_POST['genre_add']);
    header('Location: ?genres');
  }

  // Modifier un genre
  if(isset($_POST['genre_mod_final_submit'])){
    Genres::modGenre($_POST['genre_id_mod_final'], $_POST['genre_name_mod_final']);
    header('Location: ?genres');
  }
  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
  require "src/php/view/view.genre.list.php";

  if(!isset($_POST['select_genre_submit']) && !isset($_POST['select_genre_mod_submit'])){
    require "src/php/view/view.genre.1.php";
  }

  if(isset($_POST['select_genre_submit'])){
    // Ajouter un genre
    if($_POST['select_genre'] == 'select_genre_add'){
      require "src/php/view/view.genre.add.php";
    }

    // Modifier un genre part 1 (select)
    if($_POST['select_genre'] == 'select_genre_mod'){
      require "src/php/view/view.genre.mod.php";
    }

    // Supprimer un genre
    if($_POST['select_genre'] == 'select_genre_del'){
      require "src/php/view/view.genre.supr.php";
    }
    
  }

  // Modifier genre part 2
  if(isset($_POST['select_genre_mod_submit'])){
    $genre = Genres::genreById($_POST['select_genre_mod']);
    require "src/php/view/view.genre.mod.2.php";
  }
  //End Content
require "src/php/view/view.footer.php";
