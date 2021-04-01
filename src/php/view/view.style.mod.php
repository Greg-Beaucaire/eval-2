<form action="?styles" method="POST">
  <h1>Styles</h1>
  <label for="select_style_mod">Quel style souhaitez vous modifier ?</label>
  <select name="select_style_mod" id="style_mod">
    <?php
    foreach($listStyles as $key => $value){
      echo "<option value='".$value['style_id']."'>".$value['style_name']."</option>";
    }
    ?>
  </select>
  <input type="submit" value="Go" name="select_style_mod_submit">
</form>