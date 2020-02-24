<?php

include("./db.php");

$lid = $_GET['lid'];
$sql = "select * from TBL_Locations where L_ID=$lid";
if ($result = $dblink->query($sql)) {
    $row = $result->fetch_row();
    $v_nickname = $row[1];
    $plz = $row[2];
    $nr = $row[3];
    $strasse = $row[4];
    $L_K_ID = $row[7];
} else (print "SQL-Fehler");

$sql2 = "select * from `TBL_Ort` where `plz`='$plz'";
	$result2= $dblink->query($sql2);
	$row2 = $result2->fetch_row();
	$ort = $row2[1];
$sql3 = "select * from `TBL_Kategorie_Location` where `L_K_ID`='$L_K_ID'";
	$result3= $dblink->query($sql3);
	$row3 = $result3->fetch_row();
	$lk = $row3[1];

setlocale(LC_MONETARY, 'de_DE');

$preisf = number_format($preis, 2, ',', ' ');

?>

<html>
<head>
    <title>Produkteinzelansicht | Regio Karte</title>
    <meta charset="UTF-8">
</head>
<body>
<main>
    <div>
        <ul>
            <li>Stand-ID: <?php print_r($lid); ?></li>
            <li>Verkäufer-Nickname: <a href="./verk.php?seller=<?php print_r($v_nickname); ?>"><?php print_r($v_nickname); ?></a></li>
            <li>Straße: <?php print_r($strasse. ' ' .$nr. ' ' .$plz. ' ' .$ort); ?></li>
			<li>Stand-Typ: <?php print_r($lk); ?></li>
        </ul>
        <img src="<?php print_r($bild); ?>" class="img-fluid" alt="Produktbild">
		
		<a href="#" onclick="history.back();">Zurück</a>
	</div>
</main>


</body>
</html>
