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
			<h1>VIDEOS</h1>
			<table id="videos">
				<tr>
					<td><h3>Season 1 trailer</h3><br><br><iframe width="300" height="215" src="https://www.youtube.com/embed/xIBiJ_SzJTA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
					<td><h3>Season 2 trailer</h3><br><br><iframe width="300" height="215" src="https://www.youtube.com/embed/Oc-AsN7d1wg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
				</tr>
				<tr>
					<td><h3>Season 3 trailer</h3><br><br><iframe width="300" height="215" src="https://www.youtube.com/embed/ESLDL8H1qG0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
					<td><h3>Season 4 trailer</h3><br><br><iframe width="300" height="215" src="https://www.youtube.com/embed/CtJCWRT5fYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
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