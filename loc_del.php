<html>
<head>
<meta http-equiv="refresh" content='0;URL=locations_admin.php'>
</head>
<?php

include("./db.php");
	
$lid=strip_tags($_GET['lid']);

$del="delete from TBL_Locations where l_id=$lid";

$dblink->query($del);

?>