<?php
class Artists
{

  public static function afficheArtists()
  {
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "SELECT artist_name FROM `artists`;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute();
      $resultat = $prepare->fetchAll();
      return $resultat;
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }

  public static function addArtists($a)
  {
    $ValeurARecuperer1 = $a;
    try {
      $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
      $requete = "INSERT INTO `artists` (`artist_name`)
                    VALUES (:ValeurAEntrer1);";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':ValeurAEntrer1' => $ValeurARecuperer1
      ));
      $res = $prepare->rowCount();

      if ($res == 1) {
        echo "<p>Message à afficher en cas de réussite</p>";
      }
    } catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
  }
}
