<div>
  <h2>Liste des styles musicaux</h2>
  <ul>
    <?php
    foreach($listStyles as $key => $value){
      echo "<li>".$value['style_name']."</li>";
    }
    ?>
  </ul>
</div>