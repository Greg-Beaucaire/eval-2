<form action="?genres" method="POST">
<h1>Genres</h1>
<label for="genre_mod_final">Modifiez le genre suivant</label>
<input type="text" name="genre_name_mod_final" id="genre_mod_final" value="<?php echo(htmlentities($genre[0]['genre_name'], ENT_QUOTES));?>" required>
<input type="hidden" name="genre_id_mod_final" value="<?php echo(htmlentities($_POST['select_genre_mod'], ENT_QUOTES));?>">
<input type="submit" value="Go" name="genre_mod_final_submit">
</form>