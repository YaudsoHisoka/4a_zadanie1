<!DOCTYPE html>
<html>
<head>
	<title> Strona Szymon Tyfel</title>
	<link rel="stylesheet" type="text/css" href="style/css.css" />
	<meta charset="UTF-8" />
</head>

<body>
	<div class="kontener">
		<div id="baner">
			Test działania PHP i JavaScript
		</div>
		<div id="left">
			<button type="button" class="button" onClick="tekst()">Podaj tekst</button> <br> <!-- brak cookie -->
			<button type="button" class="button" onClick="usun()">Usun</button><br>
			<button type="button" class="button" onClick="zdjecie()">Pokaz zdjecia</button> <br>
			<button type="button" class="button" onClick="liczby()">Wylosuj liczby</a> <br><br><br>
             <p>czasami należy odświeżyć stronę jak po liczbach się kliknie zdjęcia	</p>	
		</div>
		<div id="right">
			<div id="operacja"> 
			
			</div>
			<script>
				function tekst() {
					document.getElementById("operacja").innerHTML = "";
					const el = document.createElement("input");
					el.id = "inputtekst";
					el.name="tekstinput";
					el.type="text";
					const el2 = document.createElement("input");
					el2.id = "buttontekst";
					el2.type = "submit";
					el2.onClick = "addcookie()";
					el2.title = "zatwierdz";
					el2.value = "zatwierdz"
					el2.name = "tekstbutton";
					//const form = document.createElement("form");
					//form. method = "post";
					//form.action = "index.php";
					const div = document.querySelector("#operacja");
					//div.appendChild(form);
					div.appendChild(el);
					div.appendChild(el2);
				
				
				}
				function zdjecie() {
					document.getElementById("operacja").innerHTML = '<img class="image" src="img/a.jpeg"><img class="image" src="img/b.jpeg"><img class="image" src="img/c.png"><img class="image" src="img/d.png">';
					
				}
				function liczby(){
				document.getElementById("right").innerHTML = "Wylosowaną liczbą jest " + Math.floor(Math.random() * 1001);
			    }
			</script>
			</div>
		</div>
		<div id="stopka">
			<div id="ciastko">

			</div>
		</div>
	</div>
</body>

</html>
