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

  public static function artistStyles($artistId){
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `styles`
                  JOIN assoc_as ON assoc_s_id = style_id
                  WHERE assoc_a_id = :artistId;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':artistId' => $artistId
      ));
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function artistById($artistId)
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT * FROM `artists`
                  WHERE artist_id = :artistId;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':artistId' => $artistId
      ));
      $artistById = $prepare->fetchAll();
      return $artistById;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function updateArtist($artistId, $artistName)
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "UPDATE `artists` SET `artist_name` = :artistName 
                  WHERE `artist_id` = :artistId;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':artistId' => $artistId,
        ':artistName' => $artistName
      ));      
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function deleteArtist($artistId) {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "DELETE FROM `assoc_as`
                  WHERE assoc_a_id = :artistId";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':artistId' => $artistId
      ));      
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "DELETE FROM `artists`
                  WHERE artist_id = :artistId";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':artistId' => $artistId
      ));      
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function linkArtistStyle($styleId, $artistId){
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "INSERT INTO `assoc_as` (`assoc_a_id`, `assoc_s_id`)
                    VALUES (:assoc_a_id, :assoc_s_id);";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':assoc_a_id' => $artistId,
        ':assoc_s_id' => $styleId
      ));

    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function unlinkArtistStyle($styleId, $artistId){
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "DELETE FROM `assoc_as`
                  WHERE assoc_s_id = :styleId AND assoc_a_id = :artistId";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':styleId' => $styleId,
        ':artistId' => $artistId
      ));

    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }
}
