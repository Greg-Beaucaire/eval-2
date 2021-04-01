<?php

class Genres {

  public static function afficheGenres() {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT genre_name FROM `genres`;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute();
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

}
