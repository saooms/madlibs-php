<?php




?>

<!DOCTYPE html>
<html>
	<head>
		<title>mad libs</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mad.css">
		<link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
	</head>
	<body>
		<section>
			<h1>Mad Libs</h1>
			<main>
				
				<nav>
					<li><a href="erheerstpaniek.php">Er heerst paniek...</a></li>	<li><a href="onkunde.php">Onkunde</a></li>
				</nav>
				
				<aside class="vast">
					<h2>Er heerst paniek...</h2>
					<p>Welk huisdier zou je nooit als huisdier willen hebben?</p>

					<p>Wie is de belangerijkste persoon in je leven?</p>

					<p>In welk land zou je graag willen wonen?</p>

					<p>Wat doe je als je je verveelt?</p>

					<p>Met welk speelgoed speelde je als kind het meest?</p>

					<p>Bij welke docent spijbel je het liefst?</p>

					<p>Als je €100.000,- had, wat zou je dan kopen?</p>

					<p>Wat is je favorite bezigheid?</p>
				</aside>

				<form action="paniek_filled.php" method="post">
					<input type="text" name="dier">
					<input type="text" name="persoon">
					<input type="text" name="land">
					<input type="text" name="actie">
					<input type="text" name="speelgoed">
					<input type="text" name="docent">
					<input type="text" name="kopen">
					<input type="text" name="bezigheid">
					<input type="submit">
				</form>

				<footer>Deze website is gemaakt door Stijn</footer>
			</main>
		</section>

	</body>
</html>