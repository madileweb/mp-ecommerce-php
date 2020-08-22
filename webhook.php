<?php
 
	// SDK DE MERCADO PAGO
	require __DIR__  . '/vendor/autoload.php';

	// AGREGA CREDENCIALES
	MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
	MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");
	
	$json = file_get_contents('php://input');

	file_put_contents('registro.log', $json . PHP_EOL, FILE_APPEND);
	
	header("HTTP/1.1 200 OK");
		
?>
