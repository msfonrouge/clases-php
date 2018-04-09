<?php
/*
$archivo = file_get_contents("texto.txt");
$dato = "Es un dato";
file_put_contents("texto.txt", $dato, FILE_APPEND | LOCK_EX);
*/

$r = fopen("texto.txt", "w" );
for ($i = 0; $i < 100; $i++) {
  fwrite($r, "Hola mundo!".PHP_EOL);
};
fclose($r);


$a = [
  "a" => 1,
  "b" => 2,
  "c" => "Yo <3 JSON",
];

json_encode($a);
echo "$a";
