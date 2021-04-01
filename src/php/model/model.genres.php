<?php

class Genres {

  public static function afficheGenres() {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `genres`;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute();
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function genreById($genreId) {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `genres`
                  WHERE genre_id = :genre_id;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':genre_id' => $genreId
      ));
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function addGenre($a)
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "INSERT INTO `genres` (`genre_name`)
                    VALUES (:genre_name);";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':genre_name' => $a
      ));
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

  }

  public static function modGenre($genreId, $genreName){
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "UPDATE `genres` SET `genre_name` = :genreName 
      WHERE `genre_id` = :genreId;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':genreName' => $genreName,
        ':genreId' => $genreId

      ));
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function suprGenre($genreId){
    
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "UPDATE `styles` SET `style_genre_id` = :style_genre_id_mod
                  WHERE `style_genre_id` = :style_genre_id ;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':style_genre_id' => $genreId,
        ':style_genre_id_mod' => NULL
      ));
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
    
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "DELETE FROM `genres` 
      WHERE `genre_id` = :genreId;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':genreId' => $genreId

      ));
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

}
