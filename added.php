<?php
	session_start();
	include("./templates/header.php");
?>

<html>
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Hive Coffee Shop</title>
    	<link href="./css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- <br>
		<br>
		<br> -->

		<?php
		$amount = $_GET['amount'];
		$name = $_GET['OK'];
		if(!(file_exists('basket.csv')))
			file_put_contents("basket.csv", NULL);

		$array = array($name, $amount);

		// $basket = array_map('str_getcsv', file('basket.csv'));

		$fd = fopen("basket.csv", "a");
		fputcsv($fd, $array);
		fclose($fd);

		?>
		<div class="added">
			Product added to cart!
		</div>

</body>
</html>