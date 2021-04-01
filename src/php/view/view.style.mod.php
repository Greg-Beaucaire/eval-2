<form action="?styles" method="POST">
  <h1>Styles</h1>
  <label for="select_style_mod">Quel style souhaitez vous modifier ?</label>
  <select name="select_style_mod" id="style_mod">
    <?php
    foreach($listStyles as $key => $value){
      echo "<option value='".htmlentities($value['style_id'], ENT_QUOTES)."'>".htmlentities($value['style_name'], ENT_QUOTES)."</option>";
    }
    ?>
  </select>
  <input type="submit" value="Go" name="select_style_mod_submit">
</form>