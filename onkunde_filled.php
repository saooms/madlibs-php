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
				
				<aside id="onfill">
					<h2>Onkunde</h2>
					<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["skill"]; ?>. Neem nou <?php echo $_POST["persoon"]; ?>. Zelf met de hulp van een <?php echo $_POST["item"]; ?> of zelfs <?php echo $_POST["getal"]; ?> kan <?php echo $_POST["persoon"]; ?> niet <?php echo $_POST["skill"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["goed"]; ?>, maar met een teveel aan <?php echo $_POST["slecht"]; ?>. Te veel <?php echo $_POST["slecht"]; ?> leidt tot <?php echo $_POST["erg"]; ?> en dat is niet goed als je wilt tekenen. helaas voor <?php echo $_POST["persoon"]; ?>.</p>
				</aside>

				<footer>Deze website is gemaakt door Stijn</footer>
			</main>
		</section>

	</body>
</html>