<?php
  include("./db.php");
?>
<html>
<head>
<meta http-equiv="refresh" content="0; URL=produktliste_admin.php">
</head>
<?php

$produktname=strip_tags($_GET['produktname']);
$v_nickname=strip_tags($_GET['v_nickname']);
$preis=strip_tags($_GET['preis']);
$kategorie=strip_tags($_GET['kategorie']);
$beschreibung=strip_tags($_GET['beschreibung']);
$bild=strip_tags($_GET['bild']);

$update="update TBL_Verkaeufer_Produkt set v_nickname='$v_nickname', produktname='$produktname', preis='$preis', kategorie='$kategorie', beschreibung='$beschreibung', bild='$bild' where v_nickname='$v_nickname'";
print $update;
$dblink->query($update);

?>