<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="help.css" rel="stylesheet" type="text/css" >
	<title>Wprowadzanie i aktualizacja danych pomocy technicznej</title>
</head>
<body>
	<h2>Wprowadzanie danych pomocy technicznej</h2>
	<form action="InsertData.php" method="post" name="dataentry">
		Wprowadź wartość łańcucha zapytań (q1...qx)<br/>
		<input type="text" name="chain" size="3">
		<p/>
		Wprowadź tekst pomocy<br/>
		<textarea name="response" rows="8" cols="24"></textarea>
		<p/>
		<input type="submit" value="Wstaw dane do tabeli" name="send">
	</form>
	<h2>Aktualizacja danych</h2>
	<form action="UpdateData.php" method="post" name="dataupdate">
		Wprowadź wartość łańcucha zapytań (q1...qx)<br/>
		<input type="text" name="chain" size="3">
		<p/>
		Wprowadź tekst pomocy<br/>
		<textarea name="response" rows="8" cols="24"></textarea>
		<p/>
		<input type="submit" value="Aktualizuj tabelę" name="update">
	</form>
</body>
</html>