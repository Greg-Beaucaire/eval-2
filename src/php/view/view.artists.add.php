<form action="?artists" method="POST">
<h1>Artistes</h1>
<label for="artist_name_add">Nom de l'artiste à ajouter</label>
<input type="text" placeholder="Nom de l'artiste" name="artist_name_add" id="artist_name_add" required>
<label for="artist_style_add">Choisissez le style musical de l'artiste. Vous pourrez par la suite lui associer d'autres styles.</label>
<select name="artist_style_add" id="artist_style_add">
  <?php
    foreach($listStyles as $key => $value){
      echo "<option value=".$value['style_id'].">".$value['style_name']."</option>";
    }
  ?>
</select>
<input type="submit" value="Ajouter" name="select_artist_add_submit">
</form>