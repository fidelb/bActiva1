<form action="" method="post">
<select id="tipusOperacio" name="tipusOperacio">
  <option value="dipositar">Dipositar</option>
  <option value="retirar">Retirar</option>
</select>
    Introdueix quantitat:  <input type="number" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '' ?>" /><br />
    <input type="submit" name="submit" value=" Envia " />
</form>