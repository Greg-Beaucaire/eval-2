<form action="?artists" method="POST">
<h1>Artistes</h1>
<label for="artist_id_mod">Quel artiste souhaitez vous modifier ?</label>
<select name="artist_id_mod" id="artist_id_mod">
  <?php
    foreach($listArtists as $key => $value){
      echo "<option value=".htmlentities($value['artist_id'], ENT_QUOTES).">".htmlentities($value['artist_name'], ENT_QUOTES)."</option>";
    }
  ?>
</select>
<input type="submit" value="Modifier" name="select_artist_mod_submit">
</form>