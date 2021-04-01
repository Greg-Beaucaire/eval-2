<?php

//MODEL
  //DB
  require "src/php/model/model.config.php";

  //Model Content
  require "src/php/model/model.styles.php";
  require "src/php/model/model.genres.php";
  $listGenres = Genres::afficheGenres();
  $listStyles = Styles::afficheStyles();

    // Ajouter un style
    if(isset($_POST['style_add_submit'])){
      Styles::addStyle($_POST['style_add'], $_POST['style_genre_add']);
      header('Location: ?styles');
    }

    // Modifier un style
    if(isset($_POST['style_mod_final_submit'])){
      Styles::modStyle($_POST['style_id_mod_final'], $_POST['style_name_mod_final']);
      header('Location: ?styles');
    }


  //Fin Model Content


//VIEW
require "src/php/view/view.header.php";
  // Content
  require "src/php/view/view.styles.list.php";

  if(!isset($_POST['select_style_submit']) && !isset($_POST['select_style_mod_submit'])){
    require "src/php/view/view.styles.1.php";
  }
  
  if(isset($_POST['select_style_submit'])){
    // Ajouter un style
    if($_POST['select_style'] == 'select_style_add') {
      require "src/php/view/view.style.add.php";
    }

    // Modifier un style part 1 (select)
    if($_POST['select_style'] == 'select_style_mod') {
      require "src/php/view/view.style.mod.php";
    }

    // Supprimer un style
    if($_POST['select_style'] == 'select_style_supr') {
      require "src/php/view/view.style.supr.php";
    }

    // Modifier liaison style / genre
    if($_POST['select_style'] == 'select_style_genre') {
      require "src/php/view/view.style.genre.php";
    }
  }

  // Modifier un style part 2
  if(isset($_POST['select_style_mod_submit'])){
    $style = Styles::styleById($_POST['select_style_mod']);
    require "src/php/view/view.style.mod.2.php";
  }
  //End Content
require "src/php/view/view.footer.php";

?>