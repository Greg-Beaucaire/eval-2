<form action="?styles" method="POST">
  <h1>Styles</h1>
  <label for="style_genre_link">Style à modifier</label>
  <select name="style_genre_link" id="style_genre_link">
  <?php
  foreach($listStyles as $key => $value){
    echo "<option value='".htmlentities($value['style_id'], ENT_QUOTES)."'>".htmlentities($value['style_name'], ENT_QUOTES)."</option>";
  }
  ?>
  </select>
  <label for="genre_style_link">Genre à associer à ce style</label>
  <select name="genre_style_link" id="style_genre_add">
  <?php
  foreach($listGenres as $key => $value) {
    echo "<option value='".htmlentities($value['genre_id'], ENT_QUOTES)."'>".htmlentities($value['genre_name'], ENT_QUOTES)."</option>";
  }
  ?>
  </select>
  <input type="submit" value="Go" name="style_genre_submit">
</form>