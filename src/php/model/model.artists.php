<?php
class Artists
{

  public static function afficheArtists()
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `artists`;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute();
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function addArtists($a, $b)
  {
    $nomArtiste = $a;
    $idStyle = $b;
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "INSERT INTO `artists` (`artist_name`)
                    VALUES (:artist_name);";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':artist_name' => $nomArtiste
      ));
      $lastInsertedId = $pdo->lastInsertId();
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "INSERT INTO `assoc_as` (`assoc_a_id`, `assoc_s_id`)
                    VALUES (:assoc_a_id, :assoc_s_id);";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':assoc_a_id' => $lastInsertedId,
        ':assoc_s_id' => $idStyle
      ));

    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }


  }
}
