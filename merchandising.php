<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style/stylesheet.css">
		<title>Mr. Robot</title>
	</head>
	<body>
		
		<header>
			<img id="banner">
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php">DESCRIPTION</a></li>
				<li><a href="seasons.php">SEASONS</a></li>
				<li><a href="cast.php">CAST</a></li>
				<li><a href="merchandising.php">MERCHANDISING</a></li>
				<li><a href="videos.php">VIDEOS</a></li>
			</ul>
		</nav>
		<div id="nagusia">
			<br><br>
			<h1>MERCHANDISING</h1>
			<table id="merch">
				<tr>
					<td>
						<img id="merch1"><br><br>
						<h2>15€</h2>
					</td>
					<td>
						<img id="merch2"><br><br>
						<h2>10€</h2>
					</td>
					<td>
						<img id="merch3"><br><br>
						<h2>15€</h2>
					</td>
				</tr>
				<tr>
					<td>
						<img id="merch4"><br><br>
						<h2>5€</h2>
					</td>
					<td>
						<img id="merch5"><br><br>
						<h2>20€</h2>
					</td>
					<td>
						<img id="merch6"><br><br>
						<h2>15€</h2>
					</td>
				</tr>
			</table>
		</div>
		<footer>
			<h2>Mr. Robot</h2>
			<h4><?php echo date('l dS \of F Y h:i:s A'); /*l refers to the day,d to the number of the day,S to the sufix, F to the month, Y to the year,h to hour, i to minutes, s to seconds and A to check if it is AM or PM */?>
			</h4>
		</footer>
	</body>
</html>