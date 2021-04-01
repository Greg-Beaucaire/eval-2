<form action="?styles" method="POST">
  <h1>Styles</h1>
  <label for="style_add">Nom du style à ajouter</label>
  <input type="text" name="style_add" id="style_add" required>
  <label for="style_genre_add">Ce style appartient au genre</label>
  <select name="style_genre_add" id="style_genre_add">
  <?php
  foreach($listGenres as $key => $value) {
    echo "<option value='".htmlentities($value['genre_id'], ENT_QUOTES)."'>".htmlentities($value['genre_name'], ENT_QUOTES)."</option>";
  }
  ?>
  </select>
  <input type="submit" value="Go" name="style_add_submit">
</form>