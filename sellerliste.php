<html>
<head>
    <title>Sellerliste | Regio Karte</title>
    <meta charset="UTF-8">
</head>
<body>
<main>
<table border="1">
    <tr><th><b>ID</b></th><th><b>E-Mail</b></th><th><b>Vorname</b></th><th><b>Nachname</b></th>
<?php

include("./db.php");
  
  $sql="SELECT * FROM `users` ORDER BY `id` ASC";

  if ($result= $dblink->query($sql)) {
    while ($row=$result->fetch_row()) {
      print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td> $row[4]</td>    
      </tr>\n";
    } 
  
  } else {print "SQL-Fehler";}

?> 

</table>
</main>
<br>		
<button onclick="window.location.href='./sellerliste_admin.php'">Daten bearbeiten</button>

</body>
</html>
