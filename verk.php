<?php

include("./db.php");

$seller = $_GET['seller'];

    $sql = "select * from `TBL_Verkaeufer` where `v_nickname`='$seller'";
    $result= $dblink->query($sql);
    $row = $result->fetch_row();

    $vname = $row[1];
    $nname = $row[2];
    $plz = $row[3];
    $nr = $row[4];
    $strasse = $row[5];
    $tel = $row[6];
	
	$sql2 = "select * from `TBL_Ort` where `plz`='$plz'";
	$result2= $dblink->query($sql2);
	$row2 = $result2->fetch_row();
	$ort = $row2[1];

?>

<html>
<head>
    <title>Verkäuferansicht <?php print_r($seller); ?> | Regio Karte</title>
    <meta charset="UTF-8">
</head>
<body>
<main>
    <div>
        <ul>
            <li>Verkäufer: <?php print_r($seller); ?></li>
            <li>Name: <?php print_r($vname . ' ' . $nname); ?></li>
            <li>Straße: <?php print_r($strasse. ' ' .$nr. ' ' .$plz. ' ' .$ort); ?></li>
            <li>Telefonnummer: <?php print_r($tel); ?></li>
        </ul>
	</div>
</main>

</body>
</html>
