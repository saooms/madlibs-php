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
				
				<aside>
					<h2>Er heerst paniek...</h2>
					<p>Er heerst paniek in het koningkrijk <?php echo $_POST["land"]; ?>. Koning <?php echo $_POST["docent"]; ?> is ten einde raad en als koning <?php echo $_POST["docent"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raads heer <?php echo $_POST["persoon"]; ?>.</p>

					<p>"<?php echo $_POST["persoon"]; ?>! Het is een ramp! Het is een schande!"</p>

					<p>"Sire, Majesteit, uwe Luidruchtigheid, wat is er aan de hand?"</p>

					<p>"Mijn <?php echo $_POST["dier"]; ?> is verdwenen! Zo maar, Zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"] ?> voor hem gekocht!" </p>

					<p>Majesteit, uw <?php echo $_POST["dier"]; ?> komt vast vanzelf weer terug?</p>

					<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussen tijd <?php echo $_POST["bezigheid"]; ?> leren?"</p>

					<p>Maar Sire, daar kunt u toch gewoon uw <?php echo $_POST["kopen"]; ?> voor gebruiken."</p>

					<p>"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

					<p>"<?php echo $_POST["actie"]; ?>, Sire"</p>
				</aside>

				<footer>Deze website is gemaakt door Stijn</footer>
			</main>
		</section>

	</body>
</html>