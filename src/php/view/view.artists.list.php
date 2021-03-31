<div>
  <h2>Liste des artistes</h2>
  <ul>
    <?php
    foreach($listArtists as $key => $value){
      echo "<li>".$value['artist_name']."</li>";
    }
    ?>
  </ul>
</div>