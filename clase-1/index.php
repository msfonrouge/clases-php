<?php

$entero = 30;
echo $entero;
echo "<br>";
var_dump($entero);

echo "<br>";
echo "<br>";

$decimal = 3.7;
echo $decimal;
echo "<br>";
var_dump($decimal);

echo "<br>";
echo "<br>";

$comillassimples = 'comillas simples';
echo $comillassimples;
echo "<br>";
var_dump($comillassimples);

echo "<br>";
echo "<br>";

$comillasdobles = "comillas dobles";
echo $comillasdobles;
echo "<br>";
var_dump($comillasdobles);

echo "<br>";
echo "<br>";

$entero = "cadena de caracteres";
echo $entero;
echo "<br>";
var_dump($entero);

echo "<br>";
echo "<br>";

$comillassimples = 2.7;
echo $comillassimples;
echo "<br>";
var_dump($comillassimples);

echo "<br>";
echo "<br>";
echo "<br>";

$uno = "tres";
$dos = "tristes";
$tres = "tigres";

echo $uno;
echo " ";
echo $dos;
echo " ";
echo $tres;

echo "<br>";
echo "<br>";
echo "<br>";

$animales = [
  'gato',
  'perro',
  'leon',
  'mono',
  'cobayo',
];

var_dump($animales);

echo "<br>";
echo "<br>";

$animales[5] = 'koala';
$animales[6] = 'buho';

var_dump($animales);

echo "<br>";
echo "<br>";

foreach ($animales as $key => $value) {
  echo "Me gustan los animales $value";
  echo "<br>";
};

echo "<br>";

$animales[0] = 'águila';
$animales[100] = 'tigre';
$animales[16] = 'cheetah';

var_dump($animales);

echo "<br>";
echo "<br>";
echo "<br>";

$auto = [
  "duenio"  => "Yo",
  "marca" => "Ford",
  "modelo"=> "Fiesta",
  "color"=> ["Negro", "Verde"],
  "anio"=> "1990",
  "patente" => "AAALGO",
  16 => "Zurich",
  "poliza" => "algo",

];

print_r($auto);
echo "<br>";
echo "<br>";
var_dump($auto);
echo "<br>";
echo "<br>";
echo $auto["duenio"];
echo "<br>";
echo "<br>";
echo $auto["poliza"];
echo "<br>";
echo "<br>";
$auto["patente"] = "AA540";
echo $auto["patente"];
echo "<br>";
echo "<br>";
$auto["duenio"] = "Otro";
echo $auto["duenio"];

echo "<br>";
echo "<br>";

$entero = 30;
$decimal = 3.7;

echo $entero + $decimal;
echo "<br>";
echo $entero - $decimal;
echo "<br>";
echo $entero / $decimal;
echo "<br>";
echo $entero * $decimal;
echo "<br>";
$variabledivision = $entero / $decimal;
echo $variabledivision;
echo "<br>";
echo $entero + 1;
echo "<br>";
echo $decimal + 1;
echo "<br>";
echo $entero + 5;
echo "<br>";
echo $decimal - 0.6;
echo "<br>";
$resultado = (($entero * 2) + $decimal) / ($entero/2);
echo "<br>";
echo "<br>";
echo "<br>";

$hola = "Hola";
$mundo = "mundo!";
$concatenar = $hola . " ". $mundo;
echo $concatenar;
echo "<br>";
$junto = $concatenar . " " . "Que bueno esta php";
echo $junto;
 ?>
