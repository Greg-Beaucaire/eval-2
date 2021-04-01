<div id="style">
  <h2>Liste des styles musicaux classés par genre</h2>
    <?php
    $genre = $listStyles[0]['genre_name'];
    echo "<p><span>".$listStyles[0]['genre_name']."</span> : ";
    foreach($listStyles as $key => $value){
      if($value['genre_name'] == $genre){
        echo $value['style_name']." | ";
      }

      else {
        echo "</p><p><span>".$value['genre_name']."</span> : ";
        echo $value['style_name']." | ";
      }

      $genre = $value['genre_name'];
    }
    ?>
</div>