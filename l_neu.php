<?php
include("./db.php");
?>

<html>
<head>
<meta http-equiv='refresh' content='0;URL=locations_admin.php'>
</head>
<?php



$v_nickname=strip_tags($_GET['v_nickname']);
$plz=strip_tags($_GET['plz']);
$nr=strip_tags($_GET['nr']);
$strasse=strip_tags($_GET['strasse']);
$l_k_id=strip_tags($_GET['l_k_id']);


$ins="insert into TBL_Locations (v_nickname,plz,hausnummer,strasse,l_k_id) values('$v_nickname','$plz','$nr','$strasse','$l_k_id')";

$dblink->query($ins);

?>