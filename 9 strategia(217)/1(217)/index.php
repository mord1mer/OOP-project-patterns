<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	Wstaw<br />
	<form name="insert" action="insertTrigger.php" method="post">
		<input type="text" name="data">
		<br />
		<input type="submit" value="Wstaw">
	</form>
	<br />
	Znajdź dane
	<form name="find" action="findTrigger.php" method="post">
		<input type="text" name="data">
		<br />
		<input type="submit" value="Szukaj">
	</form>
	<br />
	Pokaż wszystkie dane
	<form name="display" action="displayTrigger.php" method="post">
		<input type="submit" value="Pokaż wszystkie dane">
	</form>
	<br />
	Aktualizuj dane
	<form name="change" action="updateTrigger.php" method="post">
		<input type="text" name="data">
		<br />
		<input type="submit" value="Zmień dane w rekordzie">
	</form>
	<br />
	Usuń rekord
	<form name="killer" action="killTrigger.php" method="post">
		<input type="text" name="data">
		<br />
		<input type="submit" value="Usuń rekord">
	</form>
</body>
</html>