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
		<br>
	<div class="all-prods">
<?php
$db = unserialize(file_get_contents('./db/product.db'));
// print_r($db);
$cat = $_GET['cat'];
foreach($db as $key => $value)
{
	if ($value['product_catelog'] == $cat)
	{
		echo '<div class="one-prod">
				<div class="prod-img">
				<img src="';
		echo $value['product_img'];
		echo '">
				</div>
				<div class="prod-price">
				<p>';
		echo $value['product_price'];
		echo ' $</p>
				</div>
				<form class="prod-form" action="added.php" method="GET">
				<input id="form-num" type="number" min="0" name="amount" >';

		echo'
		<input id="form-sub" type="submit" value="';
		echo $value['product_name'];
		echo '" name="OK">
			</form>
			</div>';
	}
}

?>
</div>
</body>
</html>



