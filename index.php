<?php 

include ("operaciones.php");//incluimos la clase que contiene todas las funciones
//declaramos nuestras variables
//les damos un valor a nuestras variables
$num1=15;
$num2=35;

echo "El numero 1 es: $num1 <br>";
echo "El numero 2 es: $num2 <br>";
     //para acceder a las funciones escribimos el nombre de la clase
echo "La suma es: ". calculadora::sumar($num1,$num2);
echo "<br>";//colocamos saltos de linea
echo "La resta es: ". calculadora::restar($num1,$num2);
echo "<br>";
echo "La multiplicacion es: ". calculadora::multiplicar($num1,$num2);
echo "<br>";
echo "La dividision es: ". calculadora::division($num1,$num2);
echo "<br>";
 //fin codigo php
 ?>