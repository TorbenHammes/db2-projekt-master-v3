<?php

include("./db.php");

$pid = $_GET['pid'];
$sql = "select * from TBL_Verkaeufer_Produkt where P_ID=$pid";
if ($result = $dblink->query($sql)) {
    $row = $result->fetch_row();
    $nickname = $row[1];
    $pname = $row[2];
    $preis = $row[3];
    $bild = $row[5];
    $beschr = $row[6];
};

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
            <li>Produktname: <?php print_r($pname); ?></li>
            <li>Produtkbeschreibung: <?php print_r($beschr); ?></li>
            <li>Produktpreis: <?php printf($preisf); ?> €</li>
            <li>Produktverkäufer: <a href="./verk.php?seller=<?php print_r($nickname); ?>"><?php print_r($nickanem); ?></a></li>
        </ul>
        <img src="<?php print_r($bild); ?>" class="img-fluid" alt="Produktbild">

		<a href="#" onclick="history.back();">Zurück</a>
	</div>
</main>


</body>
</html>
