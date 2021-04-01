<div>
  <h2>Liste des artistes</h2>
  <ul>
    <?php
    foreach($listArtists as $key => $value){
      $styles = Artists::artistStyles($value['artist_id']);
      echo "<li><b>".htmlentities($value['artist_name'], ENT_QUOTES)."</b> : ";

      foreach($styles as $key => $value){
        echo htmlentities($value['style_name'], ENT_QUOTES)." ";
      }
      echo "</li>";
    }
    ?>
  </ul>
</div>