<form action="?artists" method="POST">
<h1>Artistes</h1>
<label for="artist_name_mod">Nom de l'artiste</label>
<input type="text" name="artist_name_mod" id="artist_name_mod" value="<?php echo($artistId[0]['artist_name']);?>" required>
<input type="hidden" name="artist_id_mod" value="<?php echo($artistId[0]['artist_id']);?>" required>
<input type="submit" value="Modifier" name="artist_mod_submit">
</form>