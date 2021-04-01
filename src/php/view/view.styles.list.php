<div id="style">
  <h2>Liste des styles musicaux classés par genre</h2>
    <?php
    $genre = $listStyles[0]['genre_name'];
    echo "<p><span>".htmlentities($listStyles[0]['genre_name'], ENT_QUOTES)."</span> : ";
    foreach($listStyles as $key => $value){
      if($value['genre_name'] == $genre){
        echo htmlentities($value['style_name'], ENT_QUOTES)." | ";
      }

      else {
        echo "</p><p><span>".htmlentities($value['genre_name'], ENT_QUOTES)."</span> : ";
        echo htmlentities($value['style_name'], ENT_QUOTES)." | ";
      }

      $genre = $value['genre_name'];
    }
    ?>
</div>