<form action="?artists" method="POST">
  <h1>Artistes</h1>
  <label for="select_artist_style_supr_final">Sélectionnez le style à enlever</label>
  <select name="select_artist_style_supr_final" id="select_artist_style_supr_final" required>
  <?php
  $styles = Artists::artistStyles($_POST['select_artist_style_supr']);
  foreach($styles as $key => $value){
    echo "<option value='".$value['style_id']."'>".$value['style_name']."</option>";
  }
  ?>
  </select>
  <input type="hidden" name="select_artistId_style_supr_final" value="<?php echo($_POST['select_artist_style_supr']);?>">
  <input type="submit" value="Go" name="select_artist_style_supr_final_submit">
</form>