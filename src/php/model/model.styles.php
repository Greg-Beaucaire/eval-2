<?php
class Styles
{

  public static function afficheStyles()
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `styles`;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute();
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function styleById($styleId) {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `styles`
                  WHERE style_id = :style_id;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':style_id' => $styleId
      ));
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function addStyle($styleName, $genreId)
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "INSERT INTO `styles` (`style_name`, `style_genre_id`)
                    VALUES (:styleName, :genreId);";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':styleName' => $styleName,
        ':genreId' => $genreId
      ));
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function modStyle($styleId, $styleName){
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "UPDATE `styles` SET `style_name` = :styleName 
      WHERE `style_id` = :styleId;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':styleName' => $styleName,
        ':styleId' => $styleId
      ));
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function suprStyle($styleId) {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "DELETE FROM `assoc_as`
                  WHERE assoc_s_id = :styleId";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':styleId' => $styleId
      ));      
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "DELETE FROM `styles`
                  WHERE style_id = :styleId";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':styleId' => $styleId
      ));      
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }
}
