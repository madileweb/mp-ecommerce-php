<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce - Success</title>
	
	<script src="https://www.mercadopago.com/v2/security.js" view=""></script>

</head>
<body>
	<p>Su pago fue aprobado. La siguiente información corresponde al pago número <b><?php echo $_GET["collection_id"];?></b>.</p>
	<p><b>Collection ID:</b> <?php echo $_GET["collection_id"];?><br>
	<b>Collection Status:</b> <?php echo $_GET["collection_status"];?><br>
	<b>External Reference:</b> <?php echo $_GET["external_reference"];?><br>
	<b>Payment Type:</b> <?php echo $_GET["payment_type"];?><br>
	<b>Merchant Order ID:</b> <?php echo $_GET["merchant_order_id"];?><br> 
	<b>Preference ID:</b> <?php echo $_GET["preference_id"];?><br>
	<b>Site ID:</b> <?php echo $_GET["site_id"];?><br>
	<b>Processing Mode:</b> <?php echo $_GET["processing_mode"];?><br>
	<b>Merchant Account ID:</b> <?php echo $_GET["merchant_account_id"];?><br></p>
</body>