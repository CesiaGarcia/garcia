//cesia beatriz garcia Diaz
// GD01132811
<?php
$numero = 10;
$pares = 0;
$impares = 0;

while ($numero > 0) {
if ($numero % 2== 0) {
echo "el $numero es un numero par \n";
$pares++;
}
else{
echo "el $numero es un numero impar \n";
$impares ++;

}
$numero--;
}
echo "en total se ha contado $pares numero y $impares imparesO";
?>



