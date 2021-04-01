<form action="?styles" method="POST">
  <h1>Styles</h1>
  <label for="style_mod_final">Modifiez le style suivant</label>
  <input type="text" name="style_name_mod_final" id="style_mod_final" value="<?php echo (htmlentities($style[0]['style_name'], ENT_QUOTES)); ?>" required>
  <input type="hidden" name="style_id_mod_final" value="<?php echo (htmlentities($_POST['select_style_mod'], ENT_QUOTES)); ?>">
  <input type="submit" value="Go" name="style_mod_final_submit">
</form>