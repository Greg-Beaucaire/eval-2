<form action="?genres" method="POST">
<h1>Genres</h1>
<label for="select_genre_mod">Quel genre souhaitez vous modifier ?</label>
<select name="select_genre_mod" id="select_genre_mod" required>
  <?php
  foreach($listGenres as $key => $value){
    echo "<option value='".$value['genre_id']."'>".$value['genre_name']."</option>";
  }
  ?>
</select>
<input type="submit" value="Go" name="select_genre_mod_submit">
</form>