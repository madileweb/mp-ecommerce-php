<?php

	require __DIR__  . '/vendor/autoload.php';
	
	MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
	MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

	$preference = new MercadoPago\Preference();
	
	$item = new MercadoPago\Item();
	$item->id = 1234;
	$item->title = $_POST["title"];
	$item->description = "Dispositivo móvil de Tienda e-commerce";
	$item->picture_url = "https://madileweb-mp-ecommerce-php.herokuapp.com/" . $_POST["img"];
	$item->quantity = $_POST["unit"];
	$item->unit_price = $_POST["price"];
	
	$payer = new MercadoPago\Payer();
	$payer->name = "Lalo";
	$payer->surname = "Landa";
	$payer->email = "test_user_63274575@testuser.com";
	$payer->phone = array(
		"area_code" => "11",
		"number" => "22223333"
	);
	$payer->address = array(
		"street_name" => "False",
		"street_number" => "123",
		"zip_code" => "1111"
	);
	 
	$preference->items = array($item);
	$preference->payer = $payer;
	$preference->back_urls = array(
		"success" => "https://madileweb-mp-ecommerce-php.herokuapp.com/success.php",
		"failure" => "https://madileweb-mp-ecommerce-php.herokuapp.com/failure.php",
		"pending" => "https://madileweb-mp-ecommerce-php.herokuapp.com/pending.php"
	);
	$preference->auto_return = "approved";
	$preference->external_reference = "madileweb@hotmail.com";
	$preference->notification_url = "https://madileweb-mp-ecommerce-php.herokuapp.com/webhook.php";

	$preference->payment_methods = array(
		"excluded_payment_methods" => array (
			array ( "id" => "amex" )
		),
		"excluded_payment_types" => array(
			array ( "id" => "atm" )
		),
		"installments" => 6
	);

	$preference->save();
	
	$url = $preference->init_point;					
	header("Location: $url");
	
?>