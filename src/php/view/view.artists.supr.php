<form action="?artists" method="POST">
<h1>Artistes</h1>
<label for="artist_id_supr">Quel artiste souhaitez vous supprimer ?</label>
<select name="artist_id_supr" id="artist_id_supr">
  <?php
    foreach($listArtists as $key => $value){
      echo "<option value=".htmlentities($value['artist_id'], ENT_QUOTES).">".htmlentities($value['artist_name'], ENT_QUOTES)."</option>";
    }
  ?>
</select>
<input type="submit" value="Supprimer" name="select_artist_supr_submit">
</form>