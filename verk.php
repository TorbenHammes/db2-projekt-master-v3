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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
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
