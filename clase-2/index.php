<?php

$numero1 = 30;
$numero2 = 20;

if ($numero1 > $numero2) {
  echo "El número mayor es $numero1";
} else {
  echo "El número mayor es $numero2";
}



echo "<br>";
echo "<br>";
echo "<br>";


$random = rand(1,5);

if ($random == 3 || $random == 5) {
  echo $random;
}

echo "<br>";
echo "<br>";
echo "<br>";

if ($random != 3) {
  echo "El número no es 3";
} else {
  echo "3";
}

echo "<br>";
echo "<br>";
echo "<br>";

$random100 =  rand(1,100);

if ($random100 > 50) {
  echo "El número es mayor a 50";
} else {
  echo "El número es menor a 50";
}

echo "<br>";
echo "<br>";
echo "<br>";

$nombreDeUsuario = "";
$contraseniaDeUsuario = "";

if ($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234") {
  echo "Bienvenido!";
} elseif ($nombreDeUsuario != "admin") {
  echo "Error en el usuario";
} elseif ($contraseniaDeUsuario != "1234") {
  echo "Error en la contraseña";
} elseif ($nombreDeUsuario == "" || $contraseniaDeUsuario == "") {
  echo "Faltan datos";
}

echo "<br>";
echo "<br>";
echo "<br>";

algo
