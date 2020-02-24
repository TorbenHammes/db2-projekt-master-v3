<html>
<head>
    <title>Produktliste | Regio Karte</title>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
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
      print "<tr><td>$row[2]</td><td><a href=\"./verk.php?seller=$row[1]\">$row[1]</a></td><td>$row[3]</td><td> $row[4]</td>

      <td><a href=\"./produkt_einz.php?pid=$row[0]\">Mehr Informationen</a></td>
      </tr>\n";
    }

  } else {print "SQL-Fehler";}

?>

</table>
</main>
<br>
<button onclick="window.location.href='./produktliste_admin.php'">Admin-Produktseite</button>


</body>
</html>
