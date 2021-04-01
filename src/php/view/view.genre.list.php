<div>
  <h2>Liste des genres musicaux</h2>
  <ul>
    <?php
    foreach($listGenres as $key => $value){
      echo "<li>".htmlentities($value['genre_name'], ENT_QUOTES)."</li>";
    }
    ?>
  </ul>
</div>