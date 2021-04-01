<form action="?artists" method="POST">
  <h1>Artistes</h1>
  <label for="select_artist_style_add">Sélectionnez l'artiste</label>
  <select name="select_artist_style_add" id="select_artist_style_add" required>
  <?php
  foreach($listArtists as $key => $value){
    echo "<option value='".$value['artist_id']."'>".$value['artist_name']."</option>";
  }
  ?>
  </select>
  <label for="select_style_artist_add">Sélectionnez le style</label>
  <select name="select_style_artist_add" id="select_style_artist_add" required>
  <?php
  foreach($listStyles as $key => $value){
    echo "<option value='".$value['style_id']."'>".$value['style_name']."</option>";
  }
  ?>
  </select>
  <input type="submit" value="Go" name="select_artist_style_add_submit">
</form>