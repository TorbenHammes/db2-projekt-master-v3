<?php

include("./db.php");

$pid=$_GET['pid'];

	$sql = "select * from `TBL_Verkaeufer_Produkt` where `p_id`='$pid'";
    $result= $dblink->query($sql);
    $row = $result->fetch_row();

    $v_nickname=$row[1];
    $produktname=$row[2];
    $preis=$row[3];
    $kategorie=$row[4];
	$bild=$row[5];
	$beschreibung=$row[6];

?>
<main>


<form action="p_update.php" method=GET>
Verkaeufer<br>
<input name=v_nickname value="<?php print $v_nickname;?>"><br>
Produktname<br>
<input name=produktname value="<?php print $produktname;?>"><br>
Preis in ?<br>
<input name=preis type=number value="<?php print $preis;?>"><br>
Kategorie<br>
<input name=kategorie type=number value="<?php print $kategorie;?>"><br>
Beschreibung<br>
<input name=beschreibung value="<?php print $beschreibung;?>"><br>
Bild als Foto-Link<br>
<input name=bild type=number value="<?php print $bild;?>"><br><br>


<input type=submit>
</form>

</main>

