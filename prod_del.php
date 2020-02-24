<html>
<head>
<meta http-equiv="refresh" content='0;URL=produktliste_admin.php'>
</head>
<?php

include("./db.php");
	
$id=strip_tags($_GET['pid']);

$del="delete from TBL_Verkaeufer_Produkt where p_id=$id";

$dblink->query($del);

?>