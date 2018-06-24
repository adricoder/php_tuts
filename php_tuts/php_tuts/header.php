<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>				
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
		
		<ul>
			<li  <?php
			 if ($current_link == "sample") {
				echo 'class ="selected-link"';
					}
				?>
				><a href="sample.php">Home</a></li>
			<li <?php
			 if ($current_link == "page_two") {
				echo 'class ="selected-link"';
					}
				?>
				><a href="page_two.php">Page Two</a></li>
			<li <?php if ($current_link == "page_three") {
				echo 'class ="selected-link"';
					}
				?>
			><a href="page_three.php">Page Three</a></li>
			<li><a href="arrays_1.php">Numerical Arrays</a></li>
			<li	><a href="arrays_2.php">Associative Arrays</a></li>
			<li><a href="functions.php">Associative Arrays</a></li>
		</ul>
	
	</header>
	</body>
</html>