<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="survey.css">
	<meta charset="UTF-8">
	<title>Profil programisty</title>
</head>
<body>
	<h2>Ankieta programisty</h2>
	<form name="survey" action="insertTrigger.php" method="post">
		<input type="text" name="company">
		&nbsp;Nazwa firmy<br />
		<h3>&nbsp;Główna rola</h3>
		<input type="radio" name="devdes" value="programista">
		&nbsp;Programista<br />
		<input type="radio" name="devdes" value="projektant">
		&nbsp;Projektant<br />
		<h3>&nbsp;Preferowany język programowania</h3>
		<input type="radio" name="lang" value="PHP">
		&nbsp;PHP<br />
		<input type="radio" name="lang" value="C#/ASP.NET">
		&nbsp;C# ASP.NET<br />
		<input type="radio" name="lang" value="PERL">
		&nbsp;PERL<br />
		<input type="radio" name="lang" value="JavaScript">
		&nbsp;JavaScript<br />
		<input type="radio" name="lang" value="ActionScript 3.0">
		&nbsp;ActionScript 3.0<br />
		<h3>&nbsp;Preferowana platforma projektowa/programistyczna</h3>
		<input type="radio" name="plat" value="WinPC">
		&nbsp;Windows PC<br />
		<input type="radio" name="plat" value="Mac">
		&nbsp;Apple Macintosh<br />
		<input type="radio" name="plat" value="Linux">
		&nbsp;Linux<br />
		<h3>&nbsp;Preferowany styl programowania</h3>
		<input type="radio" name="style" value="sekwencyjne">
		&nbsp;Sekwencyjne<br />
		<input type="radio" name="style" value="proceduralne">
		&nbsp;Proceduralne<br />
		<input type="radio" name="style" value="OOP">
		&nbsp;Obiektowe<br />
		<input type="radio" name="style" value="wzorce projektowe">
		&nbsp;Wzorce projektowe
		<p />
		<h3>&nbsp;Platforma, na którą piszesz</h3>
		<input type="radio" name="device" value="Desktop">
		&nbsp;Desktop<br />
		<input type="radio" name="device" value="Tablet">
		&nbsp;Tablet<br />
		<input type="radio" name="device" value="Smart Phone">
		&nbsp;Smart Phone
		<p />
		<input type="submit" value="Dodaj profil" name="sender">
	</form>
</body>
</html>