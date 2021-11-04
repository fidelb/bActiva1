
      <h3>Suma dos números. Si els dos son iguals torna el doble de la suma</h3>
      <form action="" method="post">
        Primer numero:  <input type="number" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '' ?>" /><br />
        Segon numero: <input type="number" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '' ?>" /><br /><br />
        <input type="submit" name="submit" value=" Envia " />
      </form>
