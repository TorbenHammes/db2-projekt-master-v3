<?php
$dblink = new mysqli('localhost', 'hammes', 'mango', 'hammes');

$seller = $_GET['seller'];
$sql = "select * from TBL_Verkaeufer where v_nickname=$seller";
if ($result = $dblink->query($sql)) {
    $row = $result->fetch_row();
    $vname = $row[1];
    $nname = $row[2];
    $plz = $row[3];
    $nr = $row[4];
    $strasse = $row[5];
    $tel = $row[6];
}

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
            <li>Name: <?php print($vname . ' ' . $nachname); ?> €</li>
            <li>Straße: <?php print_r($strasse); ?></li>
            <li>Telefonnummer: <?php print_r($tel); ?></li>
        </ul>
        <img src="<?php print_r($bild); ?>" class="img-fluid" alt="Produktbild">
</main>

</body>
</html>
