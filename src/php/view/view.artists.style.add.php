<form action="?artists" method="POST">
  <h1>Artistes</h1>
  <label for="select_artist_style_add">Sélectionnez l'artiste</label>
  <select name="select_artist_style_add" id="select_artist_style_add" required>
  <?php
  foreach($listArtists as $key => $value){
    echo "<option value='".htmlentities($value['artist_id'], ENT_QUOTES)."'>".htmlentities($value['artist_name'], ENT_QUOTES)."</option>";
  }
  ?>
  </select>
  <label for="select_style_artist_add">Sélectionnez le style</label>
  <select name="select_style_artist_add" id="select_style_artist_add" required>
  <?php
  foreach($listStyles as $key => $value){
    echo "<option value='".htmlentities($value['style_id'], ENT_QUOTES)."'>".htmlentities($value['style_name'], ENT_QUOTES)."</option>";
  }
  ?>
  </select>
  <input type="submit" value="Go" name="select_artist_style_add_submit">
</form>