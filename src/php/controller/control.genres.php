<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.genres.php";
  $listGenres = Genres::afficheGenres();

  if(isset($_POST['genre_add_submit'])){
    Genres::addGenre($_POST['genre_add']);
    header('Location: ?genres');
  }
  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
  require "src/php/view/view.genre.list.php";

  if(!isset($_POST['select_genre_submit'])){
    require "src/php/view/view.genre.1.php";
  }

  if(isset($_POST['select_genre_submit'])){
    // Ajouter un genre
    if($_POST['select_genre'] == 'select_genre_add'){
      require "src/php/view/view.genre.add.php";
    }

    // Modifier un genre
    if($_POST['select_genre'] == 'select_genre_mod'){
      require "src/php/view/view.genre.mod.php";
    }

    // Supprimer un genre
    if($_POST['select_genre'] == 'select_genre_del'){
      require "src/php/view/view.genre.supr.php";
    }
    
  }
  //End Content
require "src/php/view/view.footer.php";
