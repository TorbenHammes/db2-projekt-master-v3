<html>

<?php
include("./db.php");

?>

<main>
<form action="l_neu.php" method=GET>
Verkaeufer<br>
<input name=v_nickname><br>
Postleitzahl<br>
<input name=plz type=number><br>
Hausnummer<br>
<input name=nr type=number><br>
Straße<br>
<input name=strasse><br>
Stand-Kategorie<br>
<input name=l_k_id type=number><br><br>


<input type=submit>
</form>
</main>

</html>