<?php

include("./db.php");

$lid=$_GET['lid'];

	$sql = "select * from `TBL_Locations` where `l_id`='$lid'";
    $result= $dblink->query($sql);
    $row = $result->fetch_row();

    $v_nickname=$row[1];
    $plz=$row[2];
    $nr=$row[3];
	$strasse=$row[4];
	$l_k_id=$row[7];

?>
<main>


<form action="l_update.php" method=GET>
Verkaeufer<br>
<input name=v_nickname value="<?php print $v_nickname;?>"><br>
Postleitzahl<br>
<input name=plz type=number value="<?php print $plz;?>"><br>
Hausnummer<br>
<input name=nr type=number value="<?php print $nr;?>"><br>
Straße<br>
<input name=strasse value="<?php print $strasse;?>"><br>
Stand-Kategorie<br>
<input name=l_k_id type=number value="<?php print $l_k_id;?>"><br><br>

<input type=submit>
</form>

</main>

