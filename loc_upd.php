<html>
<head>
	<meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</head>
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
</html>
