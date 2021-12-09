
      <h3>Introdueix una paraula o frase. Intercanviare primera lletra per ultima.</h3>
      <form action="" method="post">
        Cadena de texte:  <input type="text" name="cadena" value="<?php echo isset($_POST['cadena']) ? $_POST['cadena'] : '' ?>" /><br />
        <br>
        <input type="submit" name="submit" value=" Envia " />
      </form>
