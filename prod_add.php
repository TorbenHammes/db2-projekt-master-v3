<html>
<head>
  <title>Produkt hinzufügen | Regio Karte</title>
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<?php
include("./db.php");

?>

<main>
<form action="p_neu.php" method=GET>
Produktname<br>
<input name=produktname><br>
Verkaeufer<br>
<input name=v_nickname><br>
Preis in ?<br>
<input name=preis type=number><br>
Kategorie<br>
<input name=kategorie type=number><br>
Beschreibung<br>
<input name=beschreibung><br>
Bild als Foto-Link<br>
<input name=bild type=number><br><br>


<input type=submit>
</form>
</main>

</html>
