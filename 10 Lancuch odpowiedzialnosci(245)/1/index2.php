<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="help.css" rel="stylesheet" type="text/css" >
	<title>Pomoc techniczna</title>
</head>
<body>
	<img src="logo/acmelogo.png" width="143" height="143"/>
	<form action="Client.php" method="post">
		<h2>Pomoc techniczna Acme</h2>
		<p/>
		<input type="radio" name="help" value="q1" />
		&nbsp; Tworzenie i projektowanie stron internetowych<br/>
		<input type="radio" name="help" value="q2" />
		&nbsp; Czy można dodać bazę danych do już istniejącej strony internetowej?<br/>
		<input type="radio" name="help" value="q3" />
		&nbsp; Czy Acme może pomóc w budowie UX i UI?<br/>
		<input type="radio" name="help" value="q4" />
		&nbsp; Czy Acme tworzy projekty graficzne?<br/>
		<input type="radio" name="help" value="q5" />
		&nbsp; Na czym polega umowa o utrzymanie strony?<br/>
		<p/>
		<input type="submit" name="sendNow" value="Pokaż odpowiedź na wybrane pytanie" />
	</form>
</body>