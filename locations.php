<html>
<head>
    <title>Standliste | Regio Karte</title>
    <meta charset="UTF-8">
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

