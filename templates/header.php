<?php
session_start();

echo
'<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hive Coffee Shop</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="nav-content flex-container">
            <div class="logo">
                <img id="logoimg" src="./images/logo.png" alt="site logo" >
            </div>
            <div class="logo">
                <h1>Hive<span id="light"><a href="./index.php">Coffee Shop</span></h1>
            </div>
            <div class="drop">
                <a class="navspan" href="./cart.php">Cart</a>
            </div>';

		echo '
			<div class="drop">
						<a class="navspan dropdown">Categories</a>
							<div class="dropdown-content">';
		echo ' <a href="./show_catalogue.php?cat=1">Category 1</a>
		<a href="./show_catalogue.php?cat=2">Category 2</a>
		<a href="./show_catalogue.php?cat=3">Category 3</a>';
		// if (file_exists('./category.db')) {
		// 	$db = unserialize(file_get_contents('./category.db'));
		// 	foreach ($db as $category) {
		// 		echo '<a href="product_list.php?category=';
		// 		echo $category['id'] . '">' . $category['name'] . '</a>';
		// 	}
		// }

		echo '</div>
				 </div>';

			if ($_SESSION["loggued_on_user"] === "") {
				echo '<div class="drop" style="width: 30%"></div>
						<div class="drop">
							<a class="navspan" href="./login.php">Login</a>
						</div>
						<div class="drop">
							<a class="navspan" href="./create_user.php">Sign up</a>
						</div>';
			};

if ($_SESSION["loggued_on_user"] !== "") {
	if ($_SESSION["admin"]) {
		echo '
		<div class="drop" style="width: 42%"></div>
		<div class="drop">
				<a class="navspan" href="./templates/admin.php">' . $_SESSION["loggued_on_user"] . '</a>
			</div>
			<div class="drop">
				<a class="navspan" href="./logout.php">Log out</a>
			</div>
		</div>
	</div>
</div>';
	}
	else {
		echo '
		<div class="drop" style="width: 42%"></div>
		<div class="drop">
		<a class="navspan" href="#">' . $_SESSION["loggued_on_user"] . '</a>
		</div> 			<div class="drop">
		<a class="navspan" href="./logout.php">Log out</a>
	</div>
	</div>
	</div>
</div>';
	}
};

echo '
	</header>';
?>