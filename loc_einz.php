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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
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
