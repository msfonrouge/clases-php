<?php
var_dump($_POST[""]);

 ?>

<!DOCTYPE html>



<body>
  <form action="" method="post">
    <select>
      <?php if (condition): ?>

      <?php endif; ?>
      <option value="green">Verde</option>
      <option value="blue">Azul</option>
      <option value="yellow">Amarillo</option>
    </select>
    <input type="submit" value="Enviar color">
  </form>
</body>



</html>
