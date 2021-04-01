<form action="?artists" method="POST">
  <h1>Artistes</h1>
  <label for="select_artist_style_supr">Sélectionnez l'artiste auquel enlever un style</label>
  <select name="select_artist_style_supr" id="select_artist_style_supr" required>
  <?php
  foreach($listArtists as $key => $value){
    echo "<option value='".htmlentities($value['artist_id'], ENT_QUOTES)."'>".htmlentities($value['artist_name'], ENT_QUOTES)."</option>";
  }
  ?>
  </select>
  <input type="submit" value="Go" name="select_artist_style_supr_submit">
</form>