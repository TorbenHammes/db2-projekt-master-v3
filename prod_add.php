<html>

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