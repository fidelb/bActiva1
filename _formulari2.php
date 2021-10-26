
      <h3>Suma dos números. Si els dos son iguals torna el doble de la suma</h3>
      <form action="" method="post">
        Cadena de texte:  <input type="text" name="cadena" value="<?php echo isset($_POST['cadena']) ? $_POST['cadena'] : '' ?>" /><br />
        <br>
        <input type="submit" name="submit" value=" Envia " />
      </form>
