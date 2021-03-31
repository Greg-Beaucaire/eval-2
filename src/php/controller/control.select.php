<?php
//SESSION
require "src/php/controller/session-start.control.php";
require "src/php/controller/session-portal-admin.control.php";

//MODEL
  //DB
  require "src/php/model/config.model.php";
  //Model page
  require "src/php/model/uniqueArray.model.php";
  require "src/php/model/tache.model.php";
  $res2 = selectTacheAjout();
  $res2 = $res2[2];
  $nombreProjet = combienProjet();
  require "src/php/model/resumeAdmin.model.php";
  $resume = resume();
  //Fin Model page


//VIEW
require "src/php/view/header-main-user.view.php";
require "src/php/view/admin-info.view.php";
  //View page
  if(!isset($_POST['select'])){
    require "src/php/view/select.view.php";
  }
  if(isset($_POST['form_select'])){
    if($_POST['form_select'] == 'form_select_tache'){
      require "src/php/view/select-tache.view.php";
    }
    if($_POST['form_select'] == 'form_select_projet'){
      require "src/php/view/select-projet.view.php";
    }
    if($_POST['form_select'] == 'form_select_utilisateur'){
      require "src/php/view/select-utilisateur.view.php";
    }
  }
  if(isset($_POST['select-tache'])){
    if($_POST['tache'] == 'ajouter_tache'){
      header('Location: ?ajout-tache');
      exit;
    }
    if($_POST['tache'] == 'modifier_tache'){
      header('Location: ?modification-tache');
      exit;
    }
    if($_POST['tache'] == 'supprimer_tache'){
      header('Location: ?suppression-tache');
      exit;
    }
  }
  if(isset($_POST['select-projet'])){
    if($_POST['projet'] == 'ajouter_projet'){
      header('Location: ?ajout-projet');
      exit;
    }
    if($_POST['projet'] == 'modifier_projet'){
      header('Location: ?modification-projet');
      exit;
    }
    if($_POST['projet'] == 'supprimer_projet'){
      header('Location: ?suppression-projet');
      exit;
    }
  }
  if(isset($_POST['select-utilisateur'])){
    if($_POST['utilisateur'] == 'ajouter_utilisateur'){
      header('Location: ?ajout-utilisateur');
      exit;
    }
    if($_POST['utilisateur'] == 'lier_utilisateur'){
      header('Location: ?liaison-utilisateur');
      exit;
    }
    if($_POST['utilisateur'] == 'retirer_utilisateur'){
      header('Location: ?retrait-utilisateur');
      exit;
    }
    if($_POST['utilisateur'] == 'supprimer_utilisateur'){
      header('Location: ?suppression-utilisateur');
      exit;
    }
  }
  //Fin View page
require "src/php/view/footer-main.view.php";
?>