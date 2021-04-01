<form action="?styles" method="POST">
  <h1>Styles</h1>
  <label for="select_style_supr">Quel style souhaitez vous supprimer ?</label>
  <select name="select_style_supr" id="style_mod">
    <?php
    foreach($listStyles as $key => $value){
      echo "<option value='".htmlentities($value['style_id'], ENT_QUOTES)."'>".htmlentities($value['style_name'], ENT_QUOTES)."</option>";
    }
    ?>
  </select>
  <input type="submit" value="Supprimer" name="select_style_supr_submit">
</form>