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
		<div class="all-prods"></div>


	<div class="cart-header">
		<div class="cart-header-img">
			Image
		</div>
		<div class="cart-header-name">
			Item name
		</div>
		<div class="cart-header-cost">
			Cost
		</div>
		<div class="cart-header-amount">
			Amount
		</div>
		<div class="cart-header-total">
			Total
		</div>
	</div>

		<div class="cart-page">


		<?php
			$csv = array_map('str_getcsv', file('basket.csv'));
			// print_r($csv);
			$final = 0;
			foreach($csv as $name => $value)
			{
				$i_total = 0;
				echo '<div class="cart-item">
				<div class="img">
					<img src="
				';
				if ($name == "dunkin")
					echo 'images/dunkin.jpg';
				elseif ($name == "mccafe")
					echo 'images/mccafe.jpg';
				elseif ($name == "helsinki")
					echo 'images/helsinki.jpg';
				elseif ($name == "bean1")
					echo 'images/bean1.jpg';
				elseif ($name == "bean2")
					echo 'images/bean2.jpg';
				elseif ($name == "bean3")
					echo 'images/bean3.jpg';
				elseif ($name == "starbucks1")
					echo 'images/starbucks1.jpeg';
				echo '">
				</div>
				<div class="item-name">';
				echo $name;
				echo '</div>
				<div class="item-price">';
				if ($name == "dunkin")
					echo '1.99';
				elseif ($name == "mccafe")
				echo '2.99';
				elseif ($name == "helsinki")
				echo '7.99';
				elseif ($name == "bean1")
				echo '5.99';
				elseif ($name == "bean2")
				echo '5.99';
				elseif ($name == "bean3")
				echo '7.99';
				elseif ($name == "starbucks1")
				echo '5.99';

				echo '</div>
				<div class="item-amount">';
				echo $value;
				echo '</div>
				<div class="item-total">';
				if ($name == "dunkin")
				$i_total = 1.99 * $value;
				elseif ($name == "mccafe")
				$i_total = 2.99 * $value;
				elseif ($name == "helsinki")
				$i_total = 7.99 * $value;
				elseif ($name == "bean1")
				$i_total = 5.99 * $value;
				elseif ($name == "bean2")
				$i_total = 5.99 * $value;
				elseif ($name == "bean3")
				$i_total = 7.99 * $value;
				elseif ($name == "starbucks1")
				$i_total = 5.99 * $value;
				echo $i_total;
				echo '</div>
				</div>';
				$total += $i_total;
			}

		?>
			<div class="cart-total">
				<div class="cart-total-text">
					Total:
				</div>
				<div class="cart-final-amount">
					<?php
					echo $total;
					?>
				</div>
			</div>

		</div>

	</body>
</html>
