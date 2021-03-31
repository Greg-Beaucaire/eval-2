<div>
  <h2>Liste des genres musicaux</h2>
  <ul>
    <?php
    foreach($listGenres as $key => $value){
      echo "<li>".$value['genre_name']."</li>";
    }
    ?>
  </ul>
</div>