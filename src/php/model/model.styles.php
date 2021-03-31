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

}