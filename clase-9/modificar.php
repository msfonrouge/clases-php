<?php session_start();

 ?>
 <!DOCTYPE html>

<body>
<form action="mostrar.php" method="post">

<input type="submit" name="reiniciar" value="Reiniciar"></input>
<br>
<input type="submit" name="incrementar" value="Incrementar"></input>

<?php
if ($_POST["reiniciar"]){
  echo "0";
};
?>

<?php
if ($_POST["incrementar"]){

  }
}
?>

</form>
</body>
 </html>
