<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="survey.css">
	<meta charset="UTF-8">
	<title>Moduł administracyjny</title>
</head>
<body>
	<h2>Moduł administracyjny</h2>
	<h3>&nbsp;Wyświetl dane</h3>
	<form name="allData" action="displayTrigger.php" method="post">
		<input type="submit" value="Wyświetl dane" name="display">
	</form>
	<form name="search" action="findTrigger.php" method="post">
		<h3>&nbsp;Wyszukiwanie</h3>
		<input type="radio" name="field" value="id">
		&nbsp;ID<br />
		<input type="radio" name="field" value="company">
		&nbsp;Firma<br />
		<input type="radio" name="field" value="devdes">
		&nbsp;Projektant/Programista<br />
		<input type="radio" name="field" value="lang">
		&nbsp;Język programowania<br />
		<input type="radio" name="field" value="plat">
		&nbsp;Platforma<br />
		<input type="radio" name="field" value="style">
		&nbsp;Styl programowania<br />
		<input type="radio" name="field" value="device">
		&nbsp;Urządzenie docelowe
		<p />
		<input type="text" name="term">
		&nbsp;Fraza wyszukiwania
		<p />
		<input type="submit" value="Szukaj" name="searcher">
	</form>
	<form name="search" action="changeTrigger.php" method="post">
		<h3>&nbsp;Zmień pole</h3>
		<input type="radio" name="update" value="id">
		&nbsp;ID <br />
		<input type="radio" name="update" value="company">
		&nbsp;Firma<br />
		<input type="radio" name="update" value="devdes">
		&nbsp;Projektant/Programista<br />
		<input type="radio" name="update" value="lang">
		&nbsp;Język programowania<br />
		<input type="radio" name="update" value="plat">
		&nbsp;Platforma<br />
		<input type="radio" name="update" value="style">
		&nbsp;Styl programowania<br />
		<input type="radio" name="update" value="device">
		&nbsp;Urządzenie docelowe
		<p />
		<input type="text" name="old">
		&nbsp;Stara wartość
		<p />
		<input type="text" name="new">
		&nbsp;Nowa wartość
		<p />
		<input type="submit" value="Zmień wartość" name="changer">
	</form>
	<h3>&nbsp;Usuń rekord</h3>
	<form name="killer" action="killTrigger.php" method="post">
		<input type="text" name="delete" size=3>
		&nbsp;Numer rekordu do usunięcia
		<p />
		<input type="submit" value="Usuń rekord" name="doa">
	</form>
</body>
</html>