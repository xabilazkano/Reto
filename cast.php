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
			<br><h1>MAIN CAST</h1><br>
			<table id="cast">
				<tr>
					<td>
						<img id="rami"><br><br>
						Name: Rami Malek<br><br>
						Character: Eliot Anderson
					</td>
					<td>
						<img id="chris"><br><br>
						Name: Christian Slater<br><br>
						Character: Mr. Robot
					</td>
				</tr>
				<tr>
					<td>
						<img id="carly"><br><br>
						Name: Carly Chaikin<br><br>
						Character: Charlene
					</td>
					<td>
						<img id="portia"><br><br>
						Name: Portia Doubleday<br><br>
						Character: Angela Moss
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