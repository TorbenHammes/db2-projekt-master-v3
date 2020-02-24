<html>
<head>
    <title>Standliste | Regio Karte</title>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</head>
<body>
<main>
<table border="1">
    <tr><th><b>Laden-ID</b></th><th><b>Verkäufer-Nickname</b></th><th><b>PLZ</b></th><th><b>Straße</b></th><th><b>Hausnummer</b></th><th><b>Ladenkategorie</b></th></tr>
<?php

include("./db.php");

  $sql="SELECT * FROM `TBL_Locations` ORDER BY `L_ID` ASC";
  $sql2="SELECT * FROM `TBL_Ort` ORDER BY `PLZ` ASC";
  $sql3="SELECT * FROM `TBL_Kategorie` ORDER BY `Kategorie` ASC";
  $sql4="SELECT * FROM `TBL_Kategorie_Location` ORDER BY `L_K_ID` ASC";

	//$sql2 = "select * from `TBL_Ort` where `plz`='$plz'";
	//$result2= $dblink->query($sql2);
	//$row2 = $result2->fetch_row();
	//$ort = $row2[1];



	// (($result= $dblink->query($sql)) AND ($result2= $dblink->query($sql2)) AND ($result4= $dblink->query($sql4))) {
    //ile (($row=$result->fetch_row()) AND ($row2=$result2->fetch_row()) AND ($row4=$result4->fetch_row())) {
	if ($result= $dblink->query($sql)) {
    while ($row=$result->fetch_row()) {
      print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td> $row[3]</td><td> $row[7]</td>
	  <td><a href=\"loc_einz.php?lid=$row[0]\">Mehr Informationen</a></td>
      </tr>\n";
    }

  } else {print "SQL-Fehler";}

?>

</table>
	</main>
<br>
<button onclick="window.location.href='./locations_admin.php'">Bearbeitungsansicht</button>

</body>
</html>
