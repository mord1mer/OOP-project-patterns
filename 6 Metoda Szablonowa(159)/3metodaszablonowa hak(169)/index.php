<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="zambezi.css">
	<title>Zambezi Trading Post</title>
	<body>
		<img src="zambezi.png" width="800" height="183" alt="zam">
		<h1>Sprzedawcy przygody</h1>
		<form action="Client.php" method="post">
			<h2>&nbsp;Sprzęt</h2>
			<h3>Nawigacja</h3>
			<p><strong>GPS</strong></p>
			<input type="radio" name="gps" value="98">
			&nbsp;Curiosity 98 zł&nbsp;
			<input type="radio" name="gps" value="112">
			&nbsp;Cabot 112 zł&nbsp;
			<input type="radio" name="gps" value="127">
			&nbsp;Boomer 127 zł&nbsp;
			<input type="radio" name="gps" value="189">
			&nbsp;Livingston 189 zł&nbsp;
			<input type="radio" name="gps" value="100">
			&nbsp;Test 100 zł&nbsp;
			<p><strong>Mapy</strong></p>
			<input type="checkbox" name="map[]" value="20">
			&nbspZambia 20 zł&nbsp;
			<input type="checkbox" name="map[]" value="29">
			&nbspAngola 29 zł&nbsp;
			<input type="checkbox" name="map[]" value="15">
			&nbspNamibia 15 zł&nbsp;
			<input type="checkbox" name="map[]" value="15">
			&nbspBotswana 15 zł&nbsp;
			<input type="checkbox" name="map[]" value="30">
			&nbspZimbabwe 30 zł&nbsp;
			<input type="checkbox" name="map[]" value="27">
			&nbspMozambik 27 zł<br/>
			<h2>&nbsp;Łódź rzeczna (Wynajem na dzień)</h2>
			<input type="radio" name="boat" value="55">
			&nbsp;Kajak 55 zł<br/>
			<input type="radio" name="boat" value="125">
			&nbsp;Canoe z silnikiem 125 zł<br/>
			<input type="radio" name="boat" value="250">
			&nbsp;Zodiac 250 zł<br/>
			<input type="radio" name="boat" value="495">
			&nbsp;Łódź parowa 495 zł
			<p/>
			<input type="submit" name="sender" value="Wyślij zamówienie">
		</form>
	</body>
	</html>