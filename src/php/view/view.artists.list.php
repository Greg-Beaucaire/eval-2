<div>
  <h2>Liste des artistes</h2>
  <ul>
    <?php
    foreach($listArtists as $key => $value){
      $styles = Styles::artistStyles($value['artist_id']);
      echo "<li><b>".$value['artist_name']."</b> : ";

      foreach($styles as $key => $value){
        echo $value['style_name']." ";
      }
      echo "</li>";
    }
    ?>
  </ul>
</div>