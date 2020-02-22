<?php
$dblink = new mysqli('localhost', 'hammes', 'mango', 'hammes');

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
</main>


</body>
</html>
