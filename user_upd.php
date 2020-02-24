<?php

include("./db.php");

$id=$_GET['id'];

	$sql = "select * from `users` where `id`='$id'";
    $result= $dblink->query($sql);
    $row = $result->fetch_row();

    $email=$row[1];
    $vname=$row[3];
    $nname=$row[4];
?>
<main>


<form action="u_update.php" method=GET>
	
Nutzer-ID: <?php print $id;?><br>
E-Mail<br>
<input name=email value="<?php print $email;?>"><br>
Vorname<br>
<input name=vname value="<?php print $vname;?>"><br>
Nachname<br>
<input name=nname value="<?php print $nname;?>"><br>


<input type=submit>
</form>

</main>

