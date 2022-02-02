<?php

class calculadora 
{
	//hacemos funciones estaticas
	//public es de acceso publico
	//definimos la funcion con function 
	//la funcion cuenta con dos parametros $num1,$num2
	public static function sumar($num1,$num2){
		$sumar=$num1+$num2;
		return $sumar;
	}

		
	public static function restar($num1,$num2){
		$restar=$num1-$num2;
		return $restar;
	}

		
	public static function multiplicar($num1,$num2){
		$multiplicar=$num1*$num2;
		return $multiplicar;
	}

		
	public static function division($num1,$num2){
		$division=$num1/$num2;
		return $division;
	}


}
?>
