<html>
<head>
    <title>Produktliste | Regio Karte</title>
    <meta charset="UTF-8">
</head>
<body>
<main>
<table border="1">
    <tr><th><b>Produktname</b></th><th><b>Verkäufer-Nickname</b></th><th><b>Preis</b></th><th><b>Kategorie</b></th><th><b>Weitere Informationen</b></th></tr>
<?php

include("./db.php");
  
  $sql="SELECT * FROM `TBL_Verkaeufer_Produkt` ORDER BY `P_ID` ASC";	

  if ($result= $dblink->query($sql)) {
    while ($row=$result->fetch_row()) {
      print "<tr><td>$row[2]</td><td>$row[1]</td><td>$row[3]</td><td> $row[4]</td>
     
      <td><a href=\"produkt_einz.php?pid=$row[0]\">Mehr Informationen</a></td>
	  <td><a href=\"prod_del.php?pid=$row[0]\">Produkt löschen</a></td>
	  <td><a href=\"prod_upd.php?pid=$row[0]\">Produkt ändern</a></td>
      </tr>\n";
    } 
  
  } else {print "SQL-Fehler";}

?> 

</table>
</main>
<br>		
<button onclick="window.location.href='./prod_add.php'">Produkt hinzufügen</button>


</body>
</html>
