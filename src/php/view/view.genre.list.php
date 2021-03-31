<div>
  <ul>
    <?php
    foreach($listGenres as $key => $value){
      echo "<li>".$value['genre_name']."</li>";
    }
    ?>
  </ul>
</div>