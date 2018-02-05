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
					<h2>Onkunde</h2>
					<p>Wat zou jij graag willen kunnen?</p>

					<p>Met welk persoon kan je goed opschieten?</p>

					<p>Wat is je favoriete getal?</p>

					<p>Wat heb je altijd bij je als je op vacantie gaat?</p>

					<p>Wat is je beste persoonlijke eigenschap?</p>

					<p>Wat is je slechste persoonlijke eigenschap?</p>

					<p>Wat is het ergste dat je kan overkomen?</p>
				</aside>

				<form action="onkunde_filled.php" method="post">
					<input type="text" name="skill">
					<input type="text" name="persoon">
					<input type="text" name="getal">
					<input type="text" name="item">
					<input type="text" name="goed">
					<input type="text" name="slecht">
					<input type="text" name="erg">
					<input type="submit" name="submit">
				</form>

				<footer>Deze website is gemaakt door Stijn</footer>
			</main>
		</section>

	</body>
</html>