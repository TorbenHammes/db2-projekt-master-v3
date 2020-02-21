<html>
<body>
<main>
<table>
<tr><th>Produktname</th><th>Verkäufer-Nickname</th><th>Preis</th><th>Kategorie</th><th>Weitere Informationen</th></tr>
<?php

  $dblink=new mysqli('localhost','hammes','mango','hammes');
  
  $sql="SELECT * FROM `TBL_Verkaeufer_Produkt` ORDER BY `P_ID` ASC";	

  if ($result= $dblink->query($sql)) {
    while ($row=$result->fetch_row()) {
      print "<tr><td>$row[2]</td><td>$row[1]</td><td>$row[3]</td><td> $row[4]</td>
      <td><a href=\"produkt_del.php?id=$row[0]\"></a></td>
      <td><a href=\"produkt_upd.php?id=$row[0]\"></a></td>
      </tr>\n";
    } 
  
  } else {print "SQL-Fehler";}

?>
</table>
</main>


</body>
</html>
