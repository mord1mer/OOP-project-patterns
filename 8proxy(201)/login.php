<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Logowanie</title>
	<link rel="stylesheet" href="proxy.css">
</head>
<body>
	<header>Logowanie</header>
	<section>
		<article id="entry">
			<form action="Client.php" method="post">
				Nazwa użytkownika: <br/>
				<input type="text" name="uname" >
				<br/>
				Hasło: <br/>
				<input type="password" name="pw" maxlength="10">
				<br/>
				<input type="submit" value="Zaloguj">
			</form>
		</article>
	</section>
</body>
</html>