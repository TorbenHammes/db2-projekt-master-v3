<html>
<head>
    <title>Verkäuferliste | Regio Karte</title>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
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
	  <td><a href=\"user_upd.php?id=$row[0]\">Daten ändern</a></td>
      </tr>\n";
    }

  } else {print "SQL-Fehler";}

?>

</table>
</main>
<br>


</body>
</html>
